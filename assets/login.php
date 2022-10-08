<?php
include './connection/connection.php';
// login

if (isset($_POST['login'])) {

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $status = "admin";
    try {

        $query = "SELECT * FROM users WHERE email=:email AND status=:status";
        $statement = $conn->prepare($query);
        $data = [
            ':email' => $email,
            ':status' => $status
        ];

        $statement->execute($data);
        $result = $statement->fetch();

        if ($statement->rowCount() > 0) {

            if (password_verify($password, $result['password'])) {

                $_SESSION['id'] = $result['id'];
                header("Location: ./admin/admindashboard.php");
            } else {

                $_SESSION['login-failed'] = "Incorrect Password.";
                header("Location: index.php");
            }
        } else {

            $query = "SELECT * FROM members WHERE m_email=:email";
            $statement = $conn->prepare($query);
            $data = [':email' => $email];

            $statement->execute($data);
            $result = $statement->fetch();
            if ($statement->rowCount() > 0) {
                if (password_verify($password, $result['m_password']))
                {
                    $_SESSION['m_id'] = $result['m_id'];
                    header("Location: ./member/memberdashboard.php");
                }
                else{
                    $_SESSION['login-failed'] = "Incorrect Password.";
                header("Location: index.php");
                }
            }else
            {
                $_SESSION['login-failed'] = "Incorrect Email.";
                header("Location: index.php");
            }
            // $_SESSION['login-failed'] = "Incorrect Email.";
            // header("Location: index.php");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
// register 

if (isset($_POST['register'])) {

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status = "member";
    $fullname = $_POST['fullname'];
    $credname = $_POST['credname'];
    $confirm_password = $_POST['confirm_password'];

    if ($password == $confirm_password) {

        $password = password_hash($password, PASSWORD_BCRYPT);

        $query = "SELECT * FROM members WHERE m_email=:email";
        $statement = $conn->prepare($query);
        $data = [':email' => $email];

        $statement->execute($data);
        $result = $statement->fetch();

        if ($statement->rowCount() == 0) {

            $query = "SELECT * FROM members WHERE m_username=:username";
            $statement = $conn->prepare($query);
            $data = [':username' => $username];

            $statement->execute($data);
            $result = $statement->fetch();

            if ($statement->rowCount() == 0) {

                $query = "INSERT INTO members (m_username, m_email, m_password, member_name, cred_name, m_status) VALUES (:username, :email, :password, :full_name, :cred_name, :status)";
                $statement = $conn->prepare($query);
                $data = [
                    ':username' => $username,
                    ':email' => $email,
                    ':password' => $password,
                    ':full_name' => $fullname,
                    ':cred_name' => $credname,
                    ':status' => $status
                ];

                $result = $statement->execute($data);

                if ($result) {
                    $_SESSION['register-success'] = "Registration Successful!";
                    header("Location: register.php");
                } else {
                    $_SESSION['register-failed'] = "Something Went Wrong! Registration Failed.";
                    header("Location: register.php");
                }
            } else {
                $_SESSION['username-already-taken'] = "Username Already Taken.";
                header("Location: register.php");
            }
        } else {
            $_SESSION['email-already-used'] = "Email Already Used.";
            header("Location: register.php");
        }
    } else {
        $_SESSION['password-not-match'] = "Password Not Match.";
        header("Location: register.php");
    }
}
