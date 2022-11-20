<?php
session_start();
?>


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
    <title>Directory System | Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" />
    <link href="./css/mystyle.css" rel="stylesheet" />
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" />
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container-fluid  min-vh-100 ">
        <div class="row" style="width: 100vw;">
            <div class="col-md-8" id="bg">

                <div class="background ">

                    <div class="white-box " style="height: 150px; display:flex;align-items:center;justify-content:center;">
                        <h1 class="m-15 text-dark">Research Office Directory System </h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center align-items-center min-vh-100 bg-dark flex-column">

                <?php





                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $query = "select * from staff_tbl";
                    $results = $conn->query($query);
                    if ($results->num_rows > 0) {
                        while ($row = $results->fetch_assoc()) {
                            if ($username == $row['username'] && $password == $row['password']) {

                                $_SESSION['username'] = $row['username'];

                                $_SESSION['staff_id'] = $row['staff_id'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['profile'] = $row['profile'];
                                $_SESSION['admin_type'] = $row['admin_type'];
                                header("Location: ./dashboard.php");
                            } else {
                                if ($username != $row['username']) {
                                    $GLOBALS['invalidUsername'] = ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Invalid Username</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                                }
                                if ($password != $row['password']) {
                                    $GLOBALS['invalidPassword'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Invalid Password</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                                }
                            }
                        }
                    }
                }
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $password = md5($password);
                    $query = "select * from admin_tbl";
                    $results = $conn->query($query);
                    if ($results->num_rows > 0) {
                        while ($row = $results->fetch_assoc()) {
                            if ($username == $row['username'] && $password == $row['password']) {

                                $_SESSION['username'] = $row['username'];

                                $_SESSION['admin_id'] = $row['admin_id'];
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['admin_type'] = $row['admin_type'];
                                $_SESSION['admin_type'] = $row['admin_type'];

                                header("Location: ./dashboard.php");
                            } else {
                                if ($username == $row['username']) {
                                    $_SESSION['username'] = $row['username'];
                                    $GLOBALS['invalidUsername'] = '';
                                } else {
                                    $GLOBALS['invalidUsername'] = ' <div class="alert alert-danger my-2 alert-dismissible fade show" role="alert">
                                    <strong>Invalid Username</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                                }
                                if ($password == $row['password']) {
                                    $_SESSION['password'] = $row['password'];
                                    $GLOBALS['invalidUsername'] = '';
                                } else {
                                    $GLOBALS['invalidPassword'] = '<div class="alert alert-danger my-2 alert-dismissible fade show" role="alert">
                                    <strong>Invalid Password</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                                }
                            }
                        }
                    }
                }

                ?>
                <div style="width: 100%; height:auto; " class="bg-light">


                    <form class=" p-15 m-15" method="POST" enctype="multipart/form-data">
                        <h2 class="text-center">Welcome</h2>


                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Username</label>
                            <input type="text" id="form3Example3" class="form-control form-control-lg" name="username" placeholder="username" />
                            <?php if (isset($GLOBALS['invalidPassword'])) {
                                echo  $GLOBALS['invalidUsername'];
                            } ?>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" placeholder="password" />
                            <?php if (isset($GLOBALS['invalidPassword'])) {
                                echo  $GLOBALS['invalidPassword'];
                            } ?>
                        </div>
                        <div class="form-outline mb-3 ">

                            <input type="submit" id="form3Example4" class="form-control form-control-lg" name="submit" value="Login" />

                        </div>

                        <div class="d-flex justify-content-between align-items-center">

                            <a href="#!" class="text-body text-center">Forgot password?</a>
                        </div>



                    </form>

                </div>

            </div>


        </div>

    </div>


    <script>

    </script>


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