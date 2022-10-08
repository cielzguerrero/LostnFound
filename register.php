<?php
include './assets/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Lost n' Found: Register </title>
</head>

<body class="bg-dark">
    <br>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <span class="navbar-brand">Lost n' Found System</span>
            <button class="btn btn-primary float-end" ><a href="index.php" style="color:black;text-decoration: none;">Login</a></button>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        
                        <form action="" method="POST">
                            <h2> Sign Up
                                <button type="submit" name="register" class="btn btn-primary float-end">Register</button>
                            </h2>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['register-success'])) : ?>
                            <h4 id="alert" class="alert alert-success"><?= $_SESSION['register-success']; ?></h4>
                        <?php
                            unset($_SESSION['register-success']);
                        endif;
                        ?>
                        <?php if (isset($_SESSION['register-failed'])) : ?>
                            <h4 id="alert" class="alert alert-warning"><?= $_SESSION['register-failed']; ?></h4>
                        <?php
                            unset($_SESSION['register-failed']);
                        endif;
                        ?>
                        <?php if (isset($_SESSION['password-match'])) : ?>
                            <h4 id="alert" class="alert alert-warning"><?= $_SESSION['password-match']; ?></h4>
                        <?php
                            unset($_SESSION['password-match']);
                        endif;
                        ?>
                        <?php if (isset($_SESSION['email-exist'])) : ?>
                            <h4 id="alert" class="alert alert-warning"><?= $_SESSION['email-exist']; ?></h4>
                        <?php
                            unset($_SESSION['email-exist']);
                        endif;
                        ?>
                        <div class="mb-2">
                            <input type="email" name="email" placeholder="Email Address" class="form-control" autocomplete="off" required> 
                        </div>
                        <div class="mb-2">
                            <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="fullname" placeholder="Full Name" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="credname" placeholder="Credential Name" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <input type="password" name="confirm_password" placeholder="Confirm Pass" class="form-control" autocomplete="off" required>
                        </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        Already have account? Login <a href="index.php">here</a>!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>