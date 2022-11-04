<?php
session_start();
?>
<?php if (!isset($_SESSION['username']) && !isset($_SESSION['admin_type'])) {
  header("Location: index.php");
} ?>
<?php include "./query.php" ?>
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
                <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="records.php"> <i class="fas fa-search" aria-hidden="true"></i>View Records</a></li>
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

            <?php $_SESSION['admin_type'] ?>


            <li class="sidebar-item">

              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="staff.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span class="hide-menu">Staffs</span>
              </a>
              <ul class="dropdown-menu mx-4">
                <li><a class="dropdown-item sidebar-link waves-effect waves-dark sidebar-link" href="staff.php"> <i class="fas fa-search" aria-hidden="true"></i>List of Staff</a></li>

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

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-12">
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

          <div class="col-lg-4 col-md-12">
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
          <div class="col-lg-4 col-md-12">
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


        </div>

        <div class="row justify-content-start">
          <div class="col-lg-4 col-md-12">
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

        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->







        <!-- ============================================================== -->
        <!-- PRODUCTS YEARLY SALES -->
        <!-- ============================================================== -->
        <!-- <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Products Yearly Sales</h3>
                            <div class="d-md-flex">
                                <ul class="list-inline d-flex ms-auto">
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                                    </li>
                                    <li class="ps-3">
                                        <h5><i class="fa fa-circle me-1 text-inverse"></i>Windows</h5>
                                    </li>
                                </ul>
                            </div>
                            <div id="ct-visits" style="height: 405px;">
                                <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                                        class="chartist-tooltip-value">6</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- ============================================================== -->
        <!-- RECENT SALES -->
        <!-- ============================================================== -->
        <!-- <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Recent sales</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select class="form-select shadow-none row border-top">
                                        <option>March 2021</option>
                                        <option>April 2021</option>
                                        <option>May 2021</option>
                                        <option>June 2021</option>
                                        <option>July 2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Elite admin</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 18, 2021</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Real Homes WP Theme</td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Ample Admin</td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="txt-oflo">Medical Pro WP Theme</td>
                                            <td>TAX</td>
                                            <td class="txt-oflo">April 20, 2021</td>
                                            <td><span class="text-danger">-$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="txt-oflo">Hosting press html</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 21, 2021</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="txt-oflo">Digital Agency PSD</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 23, 2021</td>
                                            <td><span class="text-danger">-$14</span></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="txt-oflo">Helping Hands WP Theme</td>
                                            <td>MEMBER</td>
                                            <td class="txt-oflo">April 22, 2021</td>
                                            <td><span class="text-success">$64</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
        <!-- ============================================================== -->
        <!-- Recent Comments -->
        <!-- ============================================================== -->
        <!-- $sql1 = "  SELECT * FROM borrow_tbl WHERE visit_date = CURDATE() AND borrow_status = granted"; -->


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
                            <td><?= $row['student_id'] ?></td>
                            <td><?= $row['visit_date'] ?></td>
                            <td><a target="_blank" href="./viewpdf.php?id=<?= $row['record_id'] ?>" type="button" class="btn btn-primary">View</a></td>
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
                              <td><?= $row['student_id'] ?></td>
                              <td><?= $row['visit_date'] ?></td>
                              <td><a href="./viewpdf.php?id=<?= $row['record_id'] ?>" type="button" target="_blank" class="btn btn-primary">View</a></td>
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
            <div class="row">
              <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                  <h3 class="box-title" id="hint">Borrowed Records</h3>
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



                      $sql = " SELECT * FROM borrowed_tbl";
                      $result = $conn->query($sql);

                      ?>
                      <?php
                      if ($result->num_rows > 0) { ?>
                        <table class="table text-nowrap">
                          <thead>

                            <tr>
                              <th class="border-top-0">Borrowed ID</th>
                              <th class="border-top-0">Record</th>
                              <th class="border-top-0">Return Date</th>
                              <th class="border-top-0">Student ID</th>


                            </tr>

                          </thead>
                          <tbody id="sort">
                            <?php

                            while ($row = $result->fetch_assoc()) {

                            ?> <tr>
                                <td><?= $row['borrowed_id'] ?></td>
                                <td><a href="./viewpdf.php?id=<?= $row['record_id'] ?>" target="_blank" type="button" class="btn btn-primary">View <?= $row['record_id'] ?> </a></td>
                                <td><?= $row['return_date'] ?></td>
                                <td><?= $row['student_id'] ?></td>




                              </tr>

                            <?php
                            }




                            ?>



                          </tbody>
                        </table>
                      <?php

                      } else {
                        echo "No Borrowed Records";
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



              <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card white-box p-0">
                  <div class="card-heading">
                    <h3 class="box-title mb-0">List of Staff </h3>
                  </div>
                  <div class="card-body">
                    <ul class="chatonline">
                      <?php
                      $sql = "SELECT * from staff_tbl";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                      ?>
                          <li>
                            <!-- <div class="call-chat">
                              <button class="btn btn-success text-white btn-circle btn" type="button">
                                <i class="fas fa-phone"></i>
                              </button>
                              <button class="btn btn-info btn-circle btn" type="button">
                                <i class="far fa-comments text-white"></i>
                              </button>
                            </div> -->
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img src="<?= "./images/$row[profile]" ?>" height="36" alt="user-img" class="img-circle" />
                              <div class="ms-2">
                                <span class="text-dark"><?= $row['username'] ?>
                                  <small class="d-block text-success d-block">online</small></span>
                              </div>
                            </a>
                          </li>
                      <?php
                        }
                      }

                      $conn->close();
                      ?>

                    </ul>
                  </div>
                </div>
              </div>
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