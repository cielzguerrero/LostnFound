<?php
include '../assets/action.php';
include '../assets/memberauth.php';
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
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
                            <strong><?= $result->member_name ?></strong>
                        </span>
                        <br>
                        <span class="user-role">Member</span>
                    </div>
                </div>
                <hr>
                <!-- sidebar-header  -->
                <div class="sidebar-menu">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="memberdashboard.php">
                            <i class="fa-sharp fa-solid fa-table-columns"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="mlostnfound.php">
                            <i class="fa-sharp fa-solid fa-person-circle-question"></i>
                                <span>Lost and Found Item(s)</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="mpostimage.php">
                            <i class="fa-sharp fa-solid fa-file-image"></i>
                                <span>Lost and Found Image(s)</span>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#">
                            <i class="fa fa-sharp fa-flag"></i>
                                <span class="active">Report Item</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="../assets/logout.php">
                                <i class="fa-solid fa-user"></i>
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
                <!-- Modal Start -->
                <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> Add Item </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- Modal End -->
                <div class="lostnfound-content">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <input type="hidden" name="i_currentuser" id="i_currentuser" value="<?= $result->member_name ?>">

                            <div class="form-group">
                                <label> Post Category </label>
                                <select class="form-control" name="i_itemcategory" id="i_itemcategory" required>
                                    <?php
                                    $query = "SELECT * FROM category";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();
                                    $statement->setFetchMode(PDO::FETCH_OBJ);
                                    $result = $statement->fetchAll();
                                    if ($result) {
                                        foreach ($result as $row) {
                                    ?>
                                            <option><?php echo $row->p_category ?></option>
                                    <?php }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" name="i_itemdescription" id="i_itemdescription" class="form-control" placeholder="Enter Item Description" required>
                            </div>
                            <div class="form-group">
                                <label> Location </label>
                                <input type="text" name="i_itemlocation" id="i_itemlocation" class="form-control" placeholder="Enter Location" required>
                            </div>
                            <div class="form-group">
                                <label> Post Type (Lost/Found) </label>
                                <select class="form-control" name="i_itemposttype" id="i_itemposttype" required>
                                    <option value="Lost">Lost</option>
                                    <option value="Found">Found</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> Status </label>
                                <select class="form-control" name="i_itemstatus" id="i_itemstatus" required>
                                    <option value="Unclaimed">Unclaimed</option>
                                    <option value="Claimed">Claimed</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> Remarks </label>
                                <input type="text" name="i_itemremark" id="i_itemremark" class="form-control" placeholder="Enter Category Description">
                            </div>
                            <div class="form-group">
                                <label> Manage By </label>
                                <select class="form-control" name="i_manageby" id="i_manageby">
                                    <?php
                                    $query = "SELECT * FROM members, users";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();
                                    $statement->setFetchMode(PDO::FETCH_OBJ);
                                    $result = $statement->fetchAll();
                                    if ($result) {
                                        foreach ($result as $row) {
                                    ?>
                                            <option><?php echo $row->member_name ?></option>
                                            <option><?php echo $row->username ?> - Admin</option>
                                    <?php }
                                    }
                                    ?>
                                </select>
                            </div>
                            <input type="file" name="image">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="memberreportitem" class="btn btn-primary">Report Item</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
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
<script>
    $(document).ready(function() {
        $('.editbtn').on('click', function() {
            $('#editmodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);
            $('#l_id').val(data[0]);
            $('#current_image').val(data[1]);
            $('#i_itemcategory').val(data[2]);
            $('#i_itemdescription').val(data[3]);
            $('#i_itemlocation').val(data[5]);
            $('#i_itemposttype').val(data[6]);
            $('#i_itemstatus').val(data[8]);
            $('#i_itemremark').val(data[9]);
            $('#i_manageby').val(data[10]);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.addbtn').on('click', function() {
            $('#addmodal').modal('show');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#daTable').DataTable();
    });
</script>



</html>