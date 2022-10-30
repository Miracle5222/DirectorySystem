<?php
session_start();
?>

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

                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center align-items-center min-vh-100 bg-light">


                <div style="width: 100%; height:50%; background-color:bisque;">


                    <form class=" p-15 m-15">
                        <h2 class="text-center">Welcome</h2>


                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Username</label>
                            <input type="email" id="form3Example3" class="form-control form-control-lg" name="username" placeholder="username" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" placeholder="password" />

                        </div>
                        <div class="form-outline mb-3 ">

                            <input type="submit" id="form3Example4" class="form-control form-control-lg" value="Login" />

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