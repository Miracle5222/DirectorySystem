<?php
session_start();
?>
<?php if (!isset($_SESSION['username'])) {
    header("Location: index.php");
} ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Research Office Directory System | Add Records</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
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
                                <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="#">
                                        <i class="fas fa-edit" aria-hidden="true"></i>Add Records</a></li>
                                <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="borrowed.php">
                                        <i class="fas fa-eject" aria-hidden="true"></i>Borrowed Records</a></li>
                                <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="viewBorrowedRecords.php">
                                        <i class="fas fa-eye" aria-hidden="true"></i>View Borrowed Record List</a></li>
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
                        <h4 class="page-title">Add Records</h4>

                    </div>

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
                <?php include "./connection/config.php" ?>
                <?php

                if (isset($_POST['submit'])) {
                    // get name from the form when submitted

                    $countfiles = count($_FILES['pdf_file']['name']);
                    $date = $_POST['date'];
                    $type = $_POST['type'];
                    $department_name = $_POST['course'];
                    $status = "Available";
                    $BookStatus = "Good Condition";
                    for ($i = 0; $i < $countfiles; $i++) {
                        $filename = $_FILES['pdf_file']['name'][$i];

                        // Upload file

                        if (isset($_FILES['pdf_file']['name'])) {

                            $file_name = $_FILES['pdf_file']['name'];

                            // $file_tmp = $_FILES['pdf_file']['tmp_name'];
                            $strClean =  str_replace("'", "",  "$file_name[$i]");

                            // move_uploaded_file($file_tmp, "./pdf/" . $file_name[0]);
                            move_uploaded_file($_FILES['pdf_file']['tmp_name'][$i], './pdf/' . $strClean);
                            $insertquery =
                                "INSERT INTO record_tbl(date,status,type,department_name,fileName,recordBookStatus) VALUES('$date','$status','$type','$department_name','$strClean',' $BookStatus')";


                            // Execute insert query
                            $iquery = mysqli_query($conn, $insertquery);
                        } else {

                ?> <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Failed!</strong> File must be uploaded in PDF format!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div><?php


                                } // end if
                            } // end if
                            if ($iquery) { ?>


                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Data submitted successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div><?php

                            } else {

                                ?>

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Failed!</strong> Try Again!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                <?php

                            }
                        }




                ?>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">

                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Record Type</label>
                                    <div class="col-md-12 border-bottom p-0">


                                        <select class="form-select" aria-label="Default select example" name="type">
                                            <option selected>Select Type</option>
                                            <option value="Thesis">Thesis</option>
                                            <option value="Capstone">Capstone</option>
                                            <option value="Research">Research</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Date</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="date" class="form-control p-0 border-0" required name="date" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Course</label>
                                    <div class="col-md-12 border-bottom p-0">


                                        <select class="form-select" aria-label="Default select example" name="course">
                                            <option selected>Select Department</option>
                                            <option value="BEED">BEED</option>
                                            <option value="BSIT">BSIT</option>
                                            <option value="BSC">BSC</option>
                                            <option value="BSED">BSED</option>
                                            <option value="BSHRM">BSHRM</option>
                                            <option value="MAED">MAED</option>
                                            <option value="MAGDEV">MAGDEV</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group mb-4">

                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="file" placeholder="123 456 7890" id="pdf" multiple required name="pdf_file[]" accept=".pdf" class="form-control p-2 border-0" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <input type="submit" placeholder="123 456 7890" name="submit" required class="btn btn-success" />

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- /.col -->
                </div>
            </div>
        </div>

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
    <footer class="footer text-center"> 2022 © Research Office Directory System
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