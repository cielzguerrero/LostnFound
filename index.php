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
    <title>Lost n' Found: LogIn</title>
</head>

<body class="bg-dark">
    <br>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <span class="navbar-brand">Lost n' Found System</span>
            <button class="btn btn-primary float-end" ><a href="register.php" style="color:black;text-decoration: none;">Register</a></button>
            </div>
            
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <form action="" method="POST">
                            <h2> Welcome! Please enter valid account. | Press to 
                                <button type="submit" name="login" class="btn btn-primary float-end">Login</button>
                            </h2>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['login-failed'])) : ?>
                            <h4 id="alert" class="alert alert-warning"><?= $_SESSION['login-failed']; ?></h4>
                        <?php
                            unset($_SESSION['login-failed']);
                        endif;
                        ?>
                        <?php if (isset($_SESSION['view'])) : ?>
                            <h4 id="alert" class="alert alert-warning"><?= $_SESSION['view']; ?></h4>
                        <?php
                            unset($_SESSION['view']);
                        endif;
                        ?>
                        <div class="mb-2">
                            <input type="text" name="email" placeholder="Email" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="mb-2">
                            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required>
                        </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        Don't have account? Register <a href="register.php">here</a>!
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>