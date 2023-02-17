<?php
session_start();
?>
<?php if (!isset($_SESSION['username'])) {
    header("Location: index.php");
} ?>
<?php include "./connection/config.php" ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <a href="dashboard.php" class="w-75">
                    <h4 class="m-15 text-light">Research Office Directory System </h4>
                </a>
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <?php if ($_SESSION['admin_type'] === "1") { ?>
                            <li class="px-4">
                                <a class="profile-pic " href="profile.php">
                                    <img src="./images/admin.png" alt="user-img" width="36" height="36" class="img-circle" /><span class="text-white font-medium"><?php echo $_SESSION['username'] ?></span></a>
                            </li>
                        <?php } else { ?>
                            <li class="px-4">
                                <a class="profile-pic " href="profile.php">
                                    <img src="./images/<?= $_SESSION['profile'] ?>" alt="user-img" width="36" height="36" class="img-circle" /><span class="text-white font-medium"><?php echo $_SESSION['username'] ?></span></a>
                            </li>
                        <?php } ?>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php" aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.php" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">

                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Records</span>
                            </a>
                            <ul class="dropdown-menu mx-4">
                                <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="records.php"> <i class="fas fa-eye" aria-hidden="true"></i>View Records</a></li>
                                <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="addRecords.php">
                                        <i class="fas fa-edit" aria-hidden="true"></i>Add Records</a></li>

                                <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="borrowed.php">
                                        <i class="fas fa-eject" aria-hidden="true"></i>Add Borrowed Records</a></li>
                                <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="returnRecords.php">
                                        <i class="fas fa-file" aria-hidden="true"></i>Return Records</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="addStudents.php" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Students</span>
                            </a>
                        </li>
                        <li class="sidebar-item">

                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="staff.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span class="hide-menu">Staffs</span>
                            </a>
                            <ul class="dropdown-menu mx-4">
                                <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="staff.php"> <i class="fas fa-eye" aria-hidden="true"></i>List of Staff</a></li>
                                <?php if ($_SESSION['admin_type'] === "1") { ?>
                                    <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="addStaff.php">
                                            <i class="fas fa-edit" aria-hidden="true"></i>Add Staff</a></li>
                                <?php } ?>

                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./process/logout.php" aria-expanded="false">
                                <i class="fa fa-sign-out-alt" style="transform:rotate(180deg);" aria-hidden="true"></i>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <?php if (isset($_GET['id'])) { ?>
                            <h4 class="page-title">Edit Student </h4>
                        <?php  } else { ?>
                            <h4 class="page-title">Add Student </h4>
                        <?php } ?>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"></div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->

                <?php

                if (isset($_POST['submit'])) {
                    // $id = $_SESSION['staff_id'];
                    $student_id = $_POST['student_id'];
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $number = $_POST['number'];
                    $email = $_POST['email'];
                    $course = $_POST['course'];
                    $password = "student";


                    $checkquerry = "select * from student_tbl where student_id = '$student_id'";
                    $cquery = mysqli_query($conn, $checkquerry);
                    // print_r($cquery);
                    if (!$cquery) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong> Student_ID Already Exist!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } else { ?>
                        <?php
                        $addquerry = "insert into student_tbl(student_id,fname,lname,email,number,password,course) values ('$student_id','$fname','$lname','$email','$number ','$password','$course')";
                        $iquery = mysqli_query($conn, $addquerry);


                        if ($iquery) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> Student added successfully.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } else { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong> Failed to add student!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                <?php
                        }
                    }
                } ?>
                <?php



                if (isset($_POST['updateStudent'])) {
                    $id = $_GET['id'];
                    $student_id = $_POST['student_id'];
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $updateNumber = $_POST['number'];
                    $email = $_POST['email'];
                    $course = $_POST['course'];

                    $password = $_POST['password'];

                    $updatequerry = "update student_tbl set student_id = '$student_id', fname = '$fname', lname = '$lname', number = '$updateNumber', email= '$email' ,course = '$course',password = '$password' where student_id = '$id' ";
                    $iquery = mysqli_query($conn, $updatequerry);


                    if ($iquery) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Student Updated successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Failed Update!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                <?php }
                }

                ?>

                <!-- Column -->
                <!-- Column -->

                <?php


                if (!isset($_GET['id'])) { ?>
                    <div class="row">
                        <div class="col-lg-3 col-xlg-9 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">Student ID</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" placeholder="Student_ID" name="student_id" class="form-control p-0 border-0" required />
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">First Name</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" placeholder="First Name" name="fname" class="form-control p-0 border-0" required />
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="example-email" class="col-md-12 p-0">Last Name</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" placeholder="Last Name" name="lname" class="form-control p-0 border-0" id="example-email" required />
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">Email</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="email" name="email" class="form-control p-0 border-0" required placeholder="sample@email.com" />
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">Phone No</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" placeholder="+639661337494" name="number" class="form-control p-0 border-0" required />
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">Course</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" placeholder="cource" name="course" class="form-control p-2 border-0" />

                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">Default Password <span class="text-danger">*student</span></label>
                                            <!-- <div class="col-md-12 border-bottom p-0">
                                                <input type="password" placeholder="password" name="password" class="form-control p-2 border-0" />

                                            </div> -->
                                        </div>


                                        <div class="form-group mb-4">
                                            <div class="col-md-12 border-bottom p-2">
                                                <input type="submit" name="submit" class="btn btn-success " value="Submit" />
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-9 col-xlg-9 col-md-12 ">
                            <div class="white-box">
                                <div class="table-responsive">

                                    <?php
                                    $q = isset($_GET['q']);


                                    $sql = "SELECT * from student_tbl";
                                    $result = $conn->query($sql);

                                    ?>
                                    <table class="table text-nowrap">
                                        <thead>

                                            <tr>
                                                <th class="border-top-0">Student ID</th>
                                                <th class="border-top-0">First Name</th>
                                                <th class="border-top-0">Last Name ID</th>
                                                <th class="border-top-0">Email</th>
                                                <th class="border-top-0">Contact Number </th>
                                                <th class="border-top-0">Course</th>

                                                <?php if ($_SESSION['admin_type'] === "1") { ?>
                                                    <th class="border-top-0">Edit</th>
                                                <?php } ?>
                                            </tr>

                                        </thead>
                                        <tbody id="sort">
                                            <?php
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {

                                            ?> <tr>
                                                        <td><?= $row['student_id'] ?></td>
                                                        <td><?= $row['fname'] ?></td>
                                                        <td><?= $row['lname'] ?></td>
                                                        <td><?= $row['email'] ?></td>
                                                        <td><?= $row['number'] ?></td>
                                                        <td><?= $row['course'] ?></td>

                                                        </td>
                                                        <?php if ($_SESSION['admin_type'] === "1") { ?>
                                                            <td>

                                                                <a href="./addStudents.php?id=<?= $row['student_id'] ?>" name="updateStudent" class="btn btn-success text-light">Edit</a>
                                                                <a onClick="return confirm('are you sure you want to delete this student?')" href="./process/delete.php?deleteStudent=<?= $row['student_id'] ?>" class="btn btn-danger text-light">Delete</a>
                                                            </td>
                                                        <?php } ?>


                                                    </tr>

                                            <?php
                                                }
                                            }

                                            ?>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } else {

                ?>
                    <?php

                    $sql = "SELECT * from student_tbl where student_id = '$_GET[id]'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {


                    ?>

                            <div class="col-lg-4 col-xlg-9 col-md-12 ">
                                <a href="./addStudents.php" class="btn btn-info text-white my-4">Back</a>
                                <div class="card">

                                    <div class="card-body">

                                        <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                                            <div class="form-group mb-4">
                                                <label class="col-md-12 p-0">Student ID</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <input type="text" placeholder="Student_ID" name="student_id" value="<?= $row['student_id'] ?>" class="form-control p-0 border-0" required />
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="col-md-12 p-0">First Name</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <input type="text" placeholder="First Name" name="fname" value="<?= $row['fname'] ?>" class="form-control p-0 border-0" required />
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="example-email" class="col-md-12 p-0">Last Name</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <input type="text" placeholder="Last Name" name="lname" value="<?= $row['lname'] ?>" class="form-control p-0 border-0" id="example-email" required />
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="col-md-12 p-0">Email</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <input type="email" name="email" class="form-control p-0 border-0" value="<?= $row['email'] ?>" required placeholder="sample@email.com" />
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="col-md-12 p-0">Phone No</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <input type="text" name="number" value="<?= $row['number'] ?>" placeholder="+639661337494" class="form-control p-0 border-0" required />
                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="col-md-12 p-0">Course</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <input type="text" placeholder="cource" name="course" value="<?= $row['course'] ?>" class="form-control p-2 border-0" />

                                                </div>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label class="col-md-12 p-0">Password</label>
                                                <div class="col-md-12 border-bottom p-0">
                                                    <input type="password" placeholder="password" name="password" value="<?= $row['password'] ?>" class="form-control p-2 border-0" />

                                                </div>
                                            </div>


                                            <div class="form-group mb-4">
                                                <div class="col-md-12 border-bottom p-2">
                                                    <input type="submit" name="updateStudent" class="btn btn-success " value="Update" />

                                                </div>

                                            </div>
                                        </form>

                                    </div>

                                </div>


                            </div>





                    <?php
                        }
                    }

                    $conn->close();
                    ?>
                <?php } ?>

                <div>

                </div>

                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            2022 © Research Office Directory System
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>