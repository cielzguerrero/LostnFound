<?php

include '../assets/action.php';
include '../assets/adminauth.php';
if (!isset($_SESSION['id'])) {
    header("Location: ../index.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../index.css">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
    </script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js">
    </script>
    <!-- Others -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <nav class="sidebar-wrapper" id="sb-wrapper">
            <div class="sidebar-contents m-4">
                <div class="sitebrand text-sm-left font-weight-bold">
                    <h1>Lost n Found</h1>
                    <div class="siteicon">
                        <i class="fa-solid fa-user ml-4"></i>
                    </div>
                </div>
                <hr>
                <div class="sidebar-header d-flex justify-content-between">
                    <div class="user-pic">
                        <i class="fa-solid fa-user" style="font-size: 2.5rem;"></i>
                    </div>
                    <div class="user-info ">
                        <span class="user-name">
                            <strong><?= $result->username ?></strong>
                        </span>
                        <br>
                        <span class="user-role">Administrator</span>
                    </div>
                </div>
                <hr>
                <!-- sidebar-header  -->
                <div class="sidebar-menu">
                    <ul class="list-group">
                        <li class="list-group-item active">
                            <a href="#">
                                <i class="fa-sharp fa-solid fa-table-columns"></i>
                                <span class="active">Dashboard</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="lostnfound.php">
                                <i class="fa-sharp fa-solid fa-person-circle-question"></i>
                                <span>Lost and Found Item(s)</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="postimage.php">
                                <i class="fa-sharp fa-solid fa-file-image"></i>
                                <span>Post Image</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="postcategory.php">
                                <i class="fa-sharp fa-solid fa-list"></i>
                                <span>Post Category</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="memberinfo.php">
                                <i class="fa-sharp fa-solid fa-users"></i>
                                <span>Member Information</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="membercred.php">
                                <i class="fa-sharp fa-solid fa-users-gear"></i>
                                <span>Member Credential</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="../assets/logout.php">
                                <i class="fa-sharp fa-solid fa-right-from-bracket"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
            </div>
        </nav>
        <main class="page-content" id="p-content">
            <div class="container-fluid">
                <div class="page-header row">
                    <div class="col-md-6">
                        <button class="fullscreen" onclick="myFunction()"><i class="fa-solid fa-bars"></i></button>
                    </div>
                    <div class="col-md-6">
                        <button class="fullscreen float-sm-right" onclick="openFullscreen();"><i class="fa-solid fa-expand"></i></button>
                    </div>
                </div>
                <hr>
                <div class="dashboard-content">
                    <div class="row ">
                        <div class="col align-middle">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between">
                                    <div>
                                        <h1>
                                            <?php
                                            $total = "SELECT * FROM members";
                                            $statement = $conn->prepare($total);
                                            $statement->execute();
                                            $statement->setFetchMode(PDO::FETCH_OBJ);
                                            echo $count = $statement->rowCount();
                                            ?>
                                        </h1>
                                        <p class="card-text">Total Members</p>
                                    </div>
                                    <div>
                                        <i class="fa-sharp fa-solid fa-users" style="font-size:5rem;"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-around">
                                    <div>
                                        <small class="align-middle mr-3">More Info</small><a href="memberinfo.php" style="color:black;text-decoration:none;"><i class="fa-sharp fa-solid fa-arrow-right"></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col align-middle">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between">
                                    <div>
                                        <h1>
                                            <?php
                                            $lostitem = "Lost";

                                            $total = "SELECT * FROM lostitem WHERE post_type = '$lostitem'";
                                            $statement = $conn->prepare($total);
                                            $statement->execute();
                                            $statement->setFetchMode(PDO::FETCH_OBJ);
                                            echo $count = $statement->rowCount();
                                            ?>
                                        </h1>
                                        <p class="card-text">Total Lost Items</p>
                                    </div>
                                    <div>
                                        <i class="fa-sharp fa-solid fa-person-circle-question" style="font-size:5rem;"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-around">
                                    <div>
                                        <small class="align-middle mr-3">More Info</small><a href="lostnfound.php" style="color:black;text-decoration:none;"><i class="fa-sharp fa-solid fa-arrow-right"></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col align-middle">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between">
                                    <div>
                                        <h1>
                                            <?php
                                            $founditem = "Found";

                                            $total = "SELECT * FROM lostitem WHERE post_type = '$founditem'";
                                            $statement = $conn->prepare($total);
                                            $statement->execute();
                                            $statement->setFetchMode(PDO::FETCH_OBJ);
                                            echo $count = $statement->rowCount();
                                            ?>
                                        </h1>
                                        <p class="card-text">Total Found Items</p>
                                    </div>
                                    <div>
                                        <i class="fa-sharp fa-solid fa-person-circle-plus" style="font-size:5rem;"></i>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-around">
                                    <div>
                                        <small class="align-middle mr-3">More Info</small><a href="lostnfound.php" style="color:black;text-decoration:none;"><i class="fa-sharp fa-solid fa-arrow-right"></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<script>
    function myFunction() {
        var x = document.getElementById("sb-wrapper");
        var y = document.getElementById("p-content");
        if (x.style.opacity === "0") {
            x.style.opacity = "1";
            x.style.display = "block";
            x.style.width = "300px";
            y.style.paddingLeft = "300px";

        } else {
            x.style.opacity = "0";
            x.style.display = "none";
            x.style.width = "0px";
            y.style.paddingLeft = "0px";
        }
    }
    var elem = document.documentElement;

    function openFullscreen() {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.webkitRequestFullscreen) {
            /* Safari */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) {
            /* IE11 */
            elem.msRequestFullscreen();
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>