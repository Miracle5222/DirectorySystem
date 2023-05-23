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
    <title>Research Office Directory System | Borrowed Records</title>
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


    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->


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
                        <h4 class="page-title">Borrowed Records</h4>

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
                    $record_id = $_POST['record_id'];

                    $student_id = $_POST['student_id'];
                    $date_today = $_POST['date_today'];
                    $activeStatus = "Active";
                    $smsStatus = 0;
                    // echo $date_today;

                    $date = DateTime::createFromFormat('Y-m-d', $date_today);
                    $date->modify('+3 days');
                    $return_date = $date->format('Y-m-d');



                    $Recordquery = " select * from borrowed_tbl where record_id = '$record_id'";
                    $rquery = mysqli_query($conn, $Recordquery);


                    if (!$rquery->num_rows > 0) {
                        $insertquery =
                            "INSERT INTO borrowed_tbl(record_id,return_date,schoolId,date_today,status,smsStatus) VALUES(' $record_id ','$return_date','$student_id','$date_today','$activeStatus','$smsStatus')";

                        // Execute insert query
                        $iquery = mysqli_query($conn, $insertquery);
                        if ($iquery) {


                            if ($iquery) { ?>
                                <?php
                                $updatequery =
                                    "update record_tbl set status = 'Not Available' where record_id = '$record_id'";



                                // Execute insert query
                                $uquery = mysqli_query($conn, $updatequery);
                                ?>

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> Data Added successfully.
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
                            } else { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Failed!</strong> Record Not Available
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                <?php }
                        }




                ?>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                                <!-- $_SESSION['studentId'] -->
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Record ID</label>
                                    <select class="form-select" aria-label="Default select example" required name="record_id">
                                        <?php
                                        $sql = " SELECT * from record_tbl where status = 'Available'";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                                <option selected value="<?= $row['record_id'] ?>"><?= $row['record_id'] ?></option>

                                            <?php
                                            }
                                        } else {  ?>
                                            <option>Not Available</option>
                                        <?php  }


                                        ?>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Date Borrowed</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="date" class="form-control p-0 border-0" required name="date_today" />
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Student ID</label>
                                    <select class="form-select" aria-label="Default select example" required name="student_id">
                                        <?php
                                        $sql = " SELECT * from student_tbl";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                                <option selected value="<?= $row['schoolId'] ?>"><?= $row['schoolId'] ?></option>

                                            <?php
                                            }
                                        } else {  ?>
                                            <option>Not Available</option>
                                        <?php  }


                                        ?>
                                    </select>

                                </div>

                                <!-- <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Return Date</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="date" class="form-control p-0 border-0" required name="return_date" />
                                    </div>
                                </div> -->


                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <input type="submit" name="submit" required class="btn btn-success" />

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="white-box">
                            <h3 class="box-title" id="hint">Borrowed Request</h3>
                            <div class="row d-flex justify-content-start align-items-center ">
                                <!-- <div class="col-md-3 ">

                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option>Sort By</option>
                    <option selected value="visit_date">Visit Date</option>
                    <option value="br_id">Request ID</option>
                    <option value="record_id">Record ID</option>
                  </select>

                </div> -->
                                <?php
                                if (isset($_GET['id'])) {
                                    $updatequery =
                                        "update borrowed_tbl set status = 'Active' where borrowed_id = '$_GET[id]'";

                                    // Execute insert query
                                    $uquery = mysqli_query($conn, $updatequery);


                                    $ipdatequery =
                                        "update record_tbl set status = 'Not Available' where record_id = '$_GET[recordId]'";



                                    // Execute insert query
                                    $iquery = mysqli_query($conn, $ipdatequery);
                                    if ($uquery && $iquery) {
                                ?>

                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Successfully added to borrowed Record
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div><?php

                                            } else { ?>

                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Failed!</strong> Try Again!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                <?php

                                            }
                                        }
                                ?>


                                <div class="table-responsive">

                                    <?php
                                    $q = isset($_GET['q']);


                                    $sql = "SELECT * from borrowed_tbl where status = 'Pending...'";
                                    $result = $conn->query($sql);

                                    ?>
                                    <table class="table text-nowrap">
                                        <thead>

                                            <tr>
                                                <th class="border-top-0">Request ID</th>

                                                <th class="border-top-0">Student ID</th>
                                                <th class="border-top-0">Date</th>
                                                <th class="border-top-0">Record </th>
                                                <th class="border-top-0">Borrow Status</th>

                                                <?php if ($_SESSION['admin_type'] === "1") { ?>
                                                    <th class="border-top-0">Request Status</th>
                                                <?php } ?>
                                            </tr>

                                        </thead>
                                        <tbody id="sort">
                                            <?php
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {

                                            ?> <tr>
                                                        <td><?= $row['borrowed_id'] ?></td>

                                                        <td><?= $row['schoolId'] ?></td>
                                                        <td><?= $row['date_today'] ?></td>
                                                        <td><a href="./viewpdf.php?id=<?= $row['status'] ?>" target="_blank" type="button" class="btn btn-primary">View No. <?= $row['record_id'] ?> </a></td>
                                                        <td>
                                                            <?php if ($row['status'] == "Pending...") { ?>
                                                                <small class="d-block text-info fs-4"><?= $row['status'] ?></small>
                                                            <?php
                                                            } else { ?>
                                                                <small class="d-block text-danger fs-4"><?= $row['status'] ?></small>
                                                            <?php



                                                            } ?>

                                                        </td>
                                                        <?php if ($_SESSION['admin_type'] === "1") { ?>
                                                            <td>

                                                                <a href="./borrowed.php?id=<?= $row['borrowed_id'] ?>&recordId=<?= $row['record_id'] ?>" class="btn btn-success text-light">Grant</a>
                                                                <a href="./process/deleteRequest.php?id=<?= $row['borrowed_id'] ?>" class="btn btn-danger text-light">Decline</a>
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