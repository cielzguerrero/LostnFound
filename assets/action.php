<?php

include '../connection/connection.php';

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

                $_SESSION['username'] = $result['username'];
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
                    $_SESSION['username'] = $result['m_username'];
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

if(isset($_POST['updatemember'])){
    $id = $_POST['m_id'];
    $m_membername = $_POST['member_name'];
    $m_address = $_POST['m_address'];
    $m_contact = $_POST['m_contact'];
    $m_email = $_POST['m_email'];
    $m_manageby = $_POST['manage_by'];

    try{
        $query ="UPDATE members SET member_name =:member_name, m_address =:m_address, m_contact = :m_contact, m_email = :m_email, manage_by = :manage_by WHERE m_id = :m_id";
        $statement = $conn->prepare($query);
        $data = [
            ':m_id' => $id,
            ':member_name' => $m_membername,
            ':m_address' => $m_address,
            ':m_contact' => $m_contact,
            ':m_email' => $m_email,
            ':manage_by' => $m_manageby
        ];
        $result = $statement->execute($data);

        if ($result) {
            $_SESSION['register-success'] = "Updating Member Successful!";
            header("Location: memberinfo.php");
        } else {
            $_SESSION['register-failed'] = "Something Went Wrong! Updating Member Failed.";
            header("Location: memberinfo.php");
        }
    } catch(PDOException $e){
        echo $e->getMessage();
    }
}
if(isset($_POST['updatecred'])){
    $id = $_POST['m_id'];
    $m_membername = $_POST['member_name'];
    $credname = $_POST['cred_name'];
    $creddesc = $_POST['m_description'];
    $m_manageby = $_POST['manage_by'];

    try{
        $query ="UPDATE members SET member_name =:member_name, cred_name =:cred_name, m_description = :m_description, manage_by = :manage_by WHERE m_id = :m_id";
        $statement = $conn->prepare($query);
        $data = [
            ':m_id' => $id,
            ':member_name' => $m_membername,
            ':cred_name' => $credname,
            ':m_description' => $creddesc,
            ':manage_by' => $m_manageby
        ];
        $result = $statement->execute($data);

        if ($result) {
            $_SESSION['register-success'] = "Updating Member Successful!";
            header("Location: membercred.php");
        } else {
            $_SESSION['register-failed'] = "Something Went Wrong! Updating Member Failed.";
            header("Location: membercred.php");
        }
    } catch(PDOException $e){
        echo $e->getMessage();
    }
}
if(isset($_POST['deletemember'])){
    $id = $_POST['m_id'];

    try{

    } catch(PDOException $e){
        echo $e->getMessage();
    }
}
if(isset($_POST['addcategory'])){
    $newcategoryname = $_POST['p_addcategory'];
    $newdescription = $_POST['p_adddesc'];
    $newmanageby = $_POST['p_addmanage_by'];

    try{
        $query = "INSERT INTO category (p_category, p_desc, manage_by) VALUES (:p_category, :p_desc, :manage_by)";
        $statement = $conn->prepare($query);
        $data = [
            ':p_category' => $newcategoryname,
            ':p_desc' => $newdescription,
            ':manage_by' => $newmanageby
        ];
        $result = $statement->execute($data);
        if ($result) {
                    $_SESSION['register-success'] = "Adding Category Successful!";
                    header("Location: postcategory.php");
                } else {
                    $_SESSION['register-failed'] = "Something Went Wrong! Adding Category Failed.";
                    header("Location: postcategory.php");
                }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
if(isset($_POST['updatecategory'])){
    $id = $_POST['p_id'];
    $p_category = $_POST['p_editcategory'];
    $p_desc = $_POST['p_editdesc'];
    $p_manageby = $_POST['manage_by'];

    try{
        $query ="UPDATE category SET p_category =:p_category, p_desc =:p_desc, manage_by = :manage_by WHERE p_id = :p_id";
        $statement = $conn->prepare($query);
        $data = [
            ':p_id' => $id,
            ':p_category' => $p_category,
            ':p_desc' => $p_desc,
            ':manage_by' => $p_manageby
        ];
        $result = $statement->execute($data);

        if ($result) {
            $_SESSION['register-success'] = "Updating Member Successful!";
            header("Location: postcategory.php");
        } else {
            $_SESSION['register-failed'] = "Something Went Wrong! Updating Member Failed.";
            header("Location: postcategory.php");
        }
    } catch(PDOException $e){
        echo $e->getMessage();
    }
}
if(isset($_POST['reportitem'])){
    $itemcategory = $_POST['i_itemcategory'];
    $itemdescription = $_POST['i_itemdescription'];
    $itemlocation = $_POST['i_itemlocation'];
    $itemposttype = $_POST['i_itemposttype'];
    $itemreporter = $_POST['i_currentuser'];
    $itemstatus = $_POST['i_itemstatus'];
    $itemremark = $_POST['i_itemremark'];
    $imanageby = $_POST['i_manageby'];
    try{

        if(isset($_FILES['image']['name'])) {

            $image_name = $_FILES['image']['name'];
     
            //Rename Image
            $extension = end(explode('.', $image_name));
            $image_name = "LostItem-". rand(000, 999999). "." .$extension;
    
            $sourcepath = $_FILES['image']['tmp_name'];
            $destinationpath = "../lostitems/".$image_name;
            $upload = move_uploaded_file($sourcepath, $destinationpath);
     
            if($upload == FALSE) {
                $remove_path = "../lostitems/".$image_name;
                $remove = unlink($remove_path);
                $_SESSION['register-failed'] = "Something Went Wrong! Adding Member Failed.";
                header("Location: lostnfound.php");
                die();
            } else {
                $_SESSION['register-success'] = "Adding Member Successful!";
                header("Location: lostnfound.php");
            }
     
        } else {
     
            $image_name = "";
    
        }

        $query = "INSERT INTO lostitem (post_category, post_image, description, location, post_type, member_name, p_status, remarks, manage_by) VALUES (:p_category, :p_image, :i_desc, :i_location, :p_type, :m_name, :p_status, :remark, :manage)";
        $statement = $conn->prepare($query);
        $data = [
            ':p_category' => $itemcategory,
            ':p_image' => $image_name,
            ':i_desc' => $itemdescription,
            ':i_location' =>$itemlocation,
            ':p_type' =>$itemposttype,
            ':m_name' =>$itemreporter,
            ':p_status' =>$itemstatus,
            ':remark' =>$itemremark,
            ':manage' =>$imanageby

        ];
        $result = $statement->execute($data);
        if ($result) {
                    $_SESSION['register-success'] = "Adding Category Successful!";
                    header("Location: lostnfound.php");
                } else {
                    $_SESSION['register-failed'] = "Something Went Wrong! Adding Category Failed.";
                    header("Location: lostnfound.php");
                }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
if(isset($_POST['memberreportitem'])){
    $itemcategory = $_POST['i_itemcategory'];
    $itemdescription = $_POST['i_itemdescription'];
    $itemlocation = $_POST['i_itemlocation'];
    $itemposttype = $_POST['i_itemposttype'];
    $itemreporter = $_POST['i_currentuser'];
    $itemstatus = $_POST['i_itemstatus'];
    $itemremark = $_POST['i_itemremark'];
    $imanageby = $_POST['i_manageby'];
    try{

        if(isset($_FILES['image']['name'])) {

            $image_name = $_FILES['image']['name'];
     
            //Rename Image
            $extension = end(explode('.', $image_name));
            $image_name = "LostItem-". rand(000, 999999). "." .$extension;
    
            $sourcepath = $_FILES['image']['tmp_name'];
            $destinationpath = "../lostitems/".$image_name;
            $upload = move_uploaded_file($sourcepath, $destinationpath);
     
            if($upload == FALSE) {
                $remove_path = "../lostitems/".$image_name;
                $remove = unlink($remove_path);
                $_SESSION['register-failed'] = "Something Went Wrong! Adding Member Failed.";
                header("Location: report.php");
                die();
            } else {
                $_SESSION['register-success'] = "Adding Member Successful!";
                header("Location: report.php");
            }
     
        } else {
     
            $image_name = "";
    
        }

        $query = "INSERT INTO lostitem (post_category, post_image, description, location, post_type, member_name, p_status, remarks, manage_by) VALUES (:p_category, :p_image, :i_desc, :i_location, :p_type, :m_name, :p_status, :remark, :manage)";
        $statement = $conn->prepare($query);
        $data = [
            ':p_category' => $itemcategory,
            ':p_image' => $image_name,
            ':i_desc' => $itemdescription,
            ':i_location' =>$itemlocation,
            ':p_type' =>$itemposttype,
            ':m_name' =>$itemreporter,
            ':p_status' =>$itemstatus,
            ':remark' =>$itemremark,
            ':manage' =>$imanageby

        ];
        $result = $statement->execute($data);
        if ($result) {
                    $_SESSION['register-success'] = "Adding Category Successful!";
                    header("Location: report.php");
                } else {
                    $_SESSION['register-failed'] = "Something Went Wrong! Adding Category Failed.";
                    header("Location: report.php");
                }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
if(isset($_POST['updateitem'])){
    $itemid = $_POST['i_id'];
    $itemcategory = $_POST['i_itemcategory'];
    $itemdescription = $_POST['i_itemdescription'];
    $itemlocation = $_POST['i_itemlocation'];
    $itemposttype = $_POST['i_itemposttype'];
    $itemstatus = $_POST['i_itemstatus'];
    $itemremark = $_POST['i_itemremark'];
    $imanageby = $_POST['i_manageby'];
    try{
    $current_image = $_POST['current_image'];

        if(isset($_FILES['image']['name'])){
    
            $image_name = $_FILES['image']['name'];
    
                if($image_name != ""){
    
                    //Rename Image
                    $extension = end(explode('.', $image_name));
                    $image_name = "LostItem-". rand(000, 999999). "." .$extension;
            
                    $sourcepath = $_FILES['image']['tmp_name'];
                    $destinationpath = "../lostitems/".$image_name;
                    $upload = move_uploaded_file($sourcepath, $destinationpath);
        
                    if($upload == FALSE) {
                        $_SESSION['upload'] = "<div class='message warning'>Failed To Upload Image. Try Again Later.</div>";
                        header("Location: lostnfound.php");
        
                        die();
                    }
    
                    if($current_image != "") {
                        $remove_path = "../lostitems/".$current_image;
                        $remove = unlink($remove_path);
        
                        if($remove == FALSE){
                            $_SESSION['remove'] = "<div class='message warning'>Failed To Remove Current Image. Try Again Later.</div>";
                            header("Location: lostnfound.php");
                            die();
                        }
                    }
                } else {
                    $image_name = $current_image;
                }
            } else {
                $image_name = $current_image;
            }

        $query ="UPDATE lostitem SET post_category =:p_category, post_image = :post_image, description =:i_desc, location = :i_location, post_type = :p_type, p_status = :p_status, remarks = :remark, manage_by = :manage WHERE l_id = :l_id";
        $statement = $conn->prepare($query);
        $data = [
            ':l_id' => $itemid,
            ':p_category' => $itemcategory,
            ':post_image' => $image_name,
            ':i_desc' => $itemdescription,
            ':i_location' =>$itemlocation,
            ':p_type' =>$itemposttype,
            ':p_status' =>$itemstatus,
            ':remark' =>$itemremark,
            ':manage' =>$imanageby
        ];
        $result = $statement->execute($data);
        if ($result) {
                    $_SESSION['register-success'] = "Adding Category Successful!";
                    header("Location: lostnfound.php");
                } else {
                    $_SESSION['register-failed'] = "Something Went Wrong! Adding Category Failed.";
                    header("Location: lostnfound.php");
                }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
if(isset($_POST['deleteitem'])){
    $itemid = $_POST['l_id'];
    $query = "DELETE FROM lostitem WHERE l_id = :del_id";
    $statement = $conn->prepare($query);
    $data = [
        ':del_id' =>$itemid
    ];
    $result = $statement->execute($data);
    if ($result) {
        $_SESSION['register-success'] = "Adding Category Successful!";
        header("Location: lostnfound.php");
    } else {
        $_SESSION['register-failed'] = "Something Went Wrong! Adding Category Failed.";
        header("Location: lostnfound.php");
    }
}