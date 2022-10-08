<?php
include '../assets/action.php';
include '../assets/adminauth.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="../index.css">
        <!-- Bootstrap 4 -->
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
        </script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
        </script>
        <!-- Datatable -->
        <link rel = "stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <script src = "https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
        </script>
        <script src = "https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js">
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
                        <strong><?=$result->username?></strong>
                        </span>
                        <br>
                        <span class="user-role">Administrator</span>
                    </div>
            </div>
            <hr>
            <!-- sidebar-header  -->
            <div class="sidebar-menu">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="admindashboard.php">
                        <i class="fa-sharp fa-solid fa-table-columns"></i>
                            <span>Dashboard</span>
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
                    <li class="list-group-item active">
                        <a href="#">
                        <i class="fa-sharp fa-solid fa-users"></i>
                            <span class="active">Member Information</span>
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
                <!-- Modal Start -->
                <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" >
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form action="" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="m_id" id="m_id">
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label> Complete Name </label>
                                                        <input type="text" name="member_name" id="member_name" class="form-control"
                                                            placeholder="Enter Name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Address </label>
                                                        <input type="text" name="m_address" id="m_address" class="form-control"
                                                            placeholder="Enter Address">
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Contact </label>
                                                        <input type="text" name="m_contact" id="m_contact" class="form-control"
                                                            placeholder="Enter Contact">
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Email </label>
                                                        <input type="text" name="m_email" id="m_email" class="form-control"
                                                            placeholder="Enter Email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Manage By </label>
                                                        <select class="form-control" name="manage_by" id="manage_by">
                                                            <?php 
                                                            $query = "SELECT * FROM users";
                                                            $statement = $conn->prepare($query);
                                                            $statement->execute();
                                                            $statement->setFetchMode(PDO::FETCH_OBJ);
                                                            $result = $statement->fetchAll();
                                                            if ($result) {
                                                                foreach($result as $row)
                                                                {
                                                            ?>?>
                                                        <option><?php echo $row->username?></option>
                                                            <?php }
                                                            } 
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="updatemember" class="btn btn-primary">Update Data</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal End -->
                <div class="lostnfound-content">
                        <div class="card" >
                            <div class="card-body ">
                                <table id="daTable" class="table table-bordered" >
                                <thead>
                                    <tr>
                                    <th style="display:none">ID</th>
                                    <th>Complete Name</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Manage By</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM members";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();
                                    $statement->setFetchMode(PDO::FETCH_OBJ);
                                    $result = $statement->fetchAll();
                                    if ($result) {
                                        foreach($result as $row)
                                        {
                                    ?>
                                    <tr>
                                    <td style="display: none;"><?php echo $row->m_id?></td>
                                    <td><?php echo $row->member_name?></td>
                                    <td><?php echo $row->m_address?></td>
                                    <td><?php echo $row->m_contact?></td>
                                    <td><?php echo $row->m_email?></td>
                                    <td><?php echo $row->manage_by?></td>
                                    <td class="d-flex justify-content-around">
                                        <form action="" method="POST">
                                        <input type="hidden" name="m_id" value="<?php echo $row->m_id?>">
                                        
                                        <a href="membercred.php"><button class="btn btn-info btn-xs"><i class="nav-icon fas fa-id-card"></i></button> </a><button type="button" class="btn btn-success editbtn"><i class="fa fa-edit"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                    </tr>
                                    <?php }
                                    } 
                                    ?>
                                </tbody>
                                </table>
                            </div>
                        </div> 
                    </div>
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
    } else if (elem.webkitRequestFullscreen) { /* Safari */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) { /* IE11 */
        elem.msRequestFullscreen();
    }
    }
</script>
<script>
    $(document).ready(function () {
        $('.editbtn').on('click', function () {
            $('#editmodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();
            console.log(data);
            $('#m_id').val(data[0]);
            $('#member_name').val(data[1]);
            $('#m_address').val(data[2]);
            $('#m_contact').val(data[3]);
            $('#m_email').val(data[4]);
            $('#manage_by').val(data[5]);
        });
    });
</script>

<script>
$(document).ready(function() {
$('#daTable').DataTable();
} );
</script>



</html>