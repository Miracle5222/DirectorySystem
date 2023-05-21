<?php
session_start();
?>
<?php if (!isset($_SESSION['username']) && !isset($_SESSION['admin_type'])) {
  header("Location: index.php");
} ?>
<?php include "./query.php" ?>
<?php include "./connection/config.php" ?>
 <?php include "./sendText.php" ?> 
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
  <title>Research Office Directory System | Dashboard</title>

  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png" />
  <!-- Custom CSS -->
  <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" />
  <!-- Custom CSS -->
  <link href="css/style.min.css" rel="stylesheet" />
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

  <?php
  // Set the time interval (in seconds) after which the page should be reloaded
  $reloadInterval = 43200; // 12 hours
  // $reloadInterval = 3; // 3 seconds
  // Get the current page URL
  $pageURL = $_SERVER['REQUEST_URI'];

  // Set the refresh header to reload the page
  header("Refresh: $reloadInterval; URL=$pageURL");
  ?>
  <script>
    // JavaScript function to reload the page after the specified time interval
    setTimeout(function() {
      location.reload();
    }, <?php echo $reloadInterval * 1000; ?>); // Convert the interval to milliseconds
  </script>

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

          <a class="navbar-brand" href="dashboard.html">
            <!-- Logo icon -->

            <b class="logo-icon">
              <!-- Dark Logo icon -->

              <!-- <img src="plugins/images/logo-icon.png" alt="homepage" /> -->
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->

            <span class="logo-text">
              <!-- dark Logo text -->

              <!-- <img src="plugins/images/logo-text.png" alt="homepage" /> -->
            </span>
          </a>

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
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav ms-auto d-flex align-items-center">
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <!-- <li class="in">
              <form role="search" class="app-search d-none d-md-block me-3">
                <input type="text" placeholder="Search..." class="form-control mt-0" />
                <a href="" class="active">
                  <i class="fa fa-search"></i>
                </a>
              </form>
            </li> -->
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

            <?php $_SESSION['admin_type'] ?>


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


            <!-- <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html" aria-expanded="false">
                <i class="fa fa-font" aria-hidden="true"></i>
                <span class="hide-menu">Icon</span>
              </a>
            </li>
            

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="map-google.html" aria-expanded="false">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <span class="hide-menu">Google Map</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.html" aria-expanded="false">
                <i class="fa fa-columns" aria-hidden="true"></i>
                <span class="hide-menu">Blank Page</span>
              </a>
            </li> -->
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
            <h4 class="page-title">Dashboard </h4>
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
        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6">
                <div class="white-box analytics-info">
                  <h3 class="box-title">Total Records</h3>
                  <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                      <div id="sparklinedash">
                        <canvas width="67" height="30" style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "></canvas>
                      </div>
                    </li>
                    <li class="ms-auto">
                      <span class="counter text-success"><?= $_SESSION['totalRecords'] ?></span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="white-box analytics-info">
                  <h3 class="box-title">Total Borrowed</h3>
                  <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                      <div id="sparklinedash4">
                        <canvas width="67" height="30" style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "></canvas>
                      </div>
                    </li>
                    <li class="ms-auto">
                      <span class="counter text-info"><?= $_SESSION['TotalBorrowed'] ?></span>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="white-box analytics-info">
                  <h3 class="box-title">Total Request</h3>
                  <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                      <div id="sparklinedash3">
                        <canvas width="67" height="30" style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "></canvas>
                      </div>
                    </li>
                    <li class="ms-auto">
                      <span class="counter text-info"><?= $_SESSION['totalReq'] ?></span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="white-box analytics-info">
                  <h3 class="box-title">Total Staff</h3>
                  <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                      <div id="sparklinedash2">
                        <canvas width="67" height="30" style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "></canvas>
                      </div>
                    </li>
                    <li class="ms-auto">
                      <span class="counter text-purple"><?= $_SESSION['totalStaff'] ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card white-box py-0">


              <table class="table p-2">
                <thead>
                  <tr>
                    <th scope="col">Departments</th>
                    <th scope="col">Total Records</th>

                  </tr>
                </thead>

                <tbody>
                  <?php
                  $sql = " SELECT COUNT(department_name) AS TotalRecords,department_name  FROM record_tbl GROUP BY department_name";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                  ?>
                      <tr>
                        <th scope="row"><?= $row['department_name'] ?></th>
                        <td><?= $row['TotalRecords'] ?></td>

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









        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
              <h3 class="box-title" id="hint">Visit Request</h3>
              <div class="row d-flex justify-content-start align-items-center ">
                <!-- <div class="col-md-3 ">

                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option>Sort By</option>
                    <option selected value="visit_date">Visit Date</option>
                    <option value="br_id">Request ID</option>
                    <option value="record_id">Record ID</option>
                  </select>

                </div> -->

                <div class="table-responsive">

                  <?php
                  $q = isset($_GET['q']);


                  $sql = "SELECT * from borrow_tbl";
                  $result = $conn->query($sql);

                  ?>
                  <table class="table text-nowrap">
                    <thead>

                      <tr>
                        <th class="border-top-0">Request ID</th>
                        <th class="border-top-0">Purpose</th>
                        <th class="border-top-0">Student ID</th>
                        <th class="border-top-0">Visit Date</th>
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
                            <td><?= $row['br_id'] ?></td>
                            <td><?= $row['purpose'] ?></td>
                            <td><?= $row['schoolId'] ?></td>
                            <td><?= $row['visit_date'] ?></td>
                            <td><a href="./viewpdf.php?id=<?= $row['record_id'] ?>" target="_blank" type="button" class="btn btn-primary">View No. <?= $row['record_id'] ?> </a></td>
                            <td>
                              <?php if ($row['borrow_status'] == "pending") { ?>
                                <small class="d-block text-info fs-4"><?= $row['borrow_status'] ?></small>
                              <?php } elseif ($row['borrow_status'] == "Declined") {
                              ?>
                                <small class="d-block text-danger fs-4"><?= $row['borrow_status'] ?></small>
                              <?php
                              } else { ?>
                                <small class="d-block text-success fs-4"><?= $row['borrow_status'] ?></small>
                              <?php



                              } ?>

                            </td>
                            <?php if ($_SESSION['admin_type'] === "1") { ?>
                              <td>

                                <a href="./process/grant.php?id=<?= $row['br_id'] ?>" class="btn btn-success text-light">Grant</a>
                                <a href="./process/update.php?id=<?= $row['br_id'] ?>" class="btn btn-danger text-light">Decline</a>
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
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="white-box">
                <h3 class="box-title" id="hint">Scheduled Today</h3>
                <div class="row d-flex justify-content-start align-items-center ">
                  <!-- <div class="col-md-3 ">

                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option>Sort By</option>
                    <option selected value="visit_date">Visit Date</option>
                    <option value="br_id">Request ID</option>
                    <option value="record_id">Record ID</option>
                  </select>

                </div> -->

                  <div class="table-responsive">

                    <?php
                    $q = isset($_GET['q']);


                    $sql = " SELECT * FROM borrow_tbl WHERE visit_date = CURDATE() AND borrow_status = 'Granted';";
                    $result = $conn->query($sql);

                    ?>
                    <?php
                    if ($result->num_rows > 0) { ?>
                      <table class="table text-nowrap">
                        <thead>

                          <tr>
                            <th class="border-top-0">Request ID</th>
                            <th class="border-top-0">Purpose</th>
                            <th class="border-top-0">Student ID</th>
                            <th class="border-top-0">Visit Date</th>
                            <th class="border-top-0">Record</th>
                            <th class="border-top-0">Borrow Status</th>

                          </tr>

                        </thead>
                        <tbody id="sort">
                          <?php

                          while ($row = $result->fetch_assoc()) {

                          ?> <tr>
                              <td><?= $row['br_id'] ?></td>
                              <td><?= $row['purpose'] ?></td>
                              <td><?= $row['schoolId'] ?></td>
                              <td><?= $row['visit_date'] ?></td>
                              <td><a href="./viewpdf.php?id=<?= $row['record_id'] ?>" target="_blank" type="button" class="btn btn-primary">View No. <?= $row['record_id'] ?> </a></td>
                              <td>
                                <?php if ($row['borrow_status'] == "pending") { ?>
                                  <small class="d-block text-info fs-4"><?= $row['borrow_status'] ?></small>
                                <?php } elseif ($row['borrow_status'] == "Declined") {
                                ?>
                                  <small class="d-block text-danger fs-4"><?= $row['borrow_status'] ?></small>
                                <?php
                                } else { ?>
                                  <small class="d-block text-success fs-4"><?= $row['borrow_status'] ?></small>
                                <?php



                                } ?>

                              </td>


                            </tr>

                          <?php
                          }




                          ?>



                        </tbody>
                      </table>
                    <?php

                    } else {
                      echo "No request visit today";
                    }



                    ?>
                  </div>
                </div>
              </div>
            </div>


            <!-- <div class="row">
       
            <div class="col-md-12 col-lg-8 col-sm-12">
              <div class="card white-box p-0">
                <div class="card-body">
                  <h3 class="box-title mb-0">Recent Comments</h3>
                </div>
                <div class="comment-widgets">
             
                  <div class="d-flex flex-row comment-row p-3 mt-0">
                    <div class="p-2">
                      <img
                        src="plugins/images/users/varun.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text ps-2 ps-md-3 w-100">
                      <h5 class="font-medium">James Anderson</h5>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.It has survived not only five
                        centuries.
                      </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge bg-primary rounded">Pending</span>

                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">
                          April 14, 2021
                        </div>
                      </div>
                    </div>
                  </div>
           
                  <div class="d-flex flex-row comment-row p-3">
                    <div class="p-2">
                      <img
                        src="plugins/images/users/genu.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text ps-2 ps-md-3 active w-100">
                      <h5 class="font-medium">Michael Jorden</h5>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.It has survived not only five
                        centuries.
                      </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge bg-success rounded">Approved</span>

                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">
                          April 14, 2021
                        </div>
                      </div>
                    </div>
                  </div>
               
                  <div class="d-flex flex-row comment-row p-3">
                    <div class="p-2">
                      <img
                        src="plugins/images/users/ritesh.jpg"
                        alt="user"
                        width="50"
                        class="rounded-circle"
                      />
                    </div>
                    <div class="comment-text ps-2 ps-md-3 w-100">
                      <h5 class="font-medium">Johnathan Doeting</h5>
                      <span class="mb-3 d-block"
                        >Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.It has survived not only five
                        centuries.
                      </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge rounded bg-danger">Rejected</span>

                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">
                          April 14, 2021
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->




            <!-- /.col -->
          </div>
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
        <script>

        </script>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <script>
      const data = [0, 5, 6, 10, 9, 12, 4, 9]
      const config = {
        type: 'bar',
        height: '50',
        barWidth: '10',
        resize: true,
        barSpacing: '5',
        barColor: '#7ace4c'
      }
      $('#sparklinedash5').sparkline(data, config)
    </script>
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
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>