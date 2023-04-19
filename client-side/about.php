<?php
session_start();
?>

<?php if (!isset($_SESSION['student_id'])) {
    header("Location: index.php");
} ?>

<?php require_once "includes/header.php" ?>
<?php include "./connection/config.php" ?>
<?php include "./query.php" ?>
<title>Research Office Directory System | Profile</title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<!-- table styles -->
<!-- <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" type="text/css" href="  https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

</head>


<body>
    <div class="w-100  bg-success ">
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg   navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand  text-light " href="dashboard.php">Research Office Directory System</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <div class="d-flex justify-content-between flex-direction w-100">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

                                <li class="nav-item">
                                    <a class="nav-link  text-light " href="profile.php">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  text-light " href="visitRequest.php">Visit Request</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  text-light " aria-current="page" href="about.php">About</a>
                                </li>


                            </ul>
                            <?php if (!isset($_SESSION['student_id'])) {
                                header("Location: index.php");
                            } else { ?>
                                <div>
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a href="logout.php" class="nav-link  text-light ">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            <?php  } ?>

                        </div>


                    </div>
                </div>
            </nav>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-success">About Us</h2>
                    <p>We are a group of I.T students from JHSCS College, who have come together to create a platform that will help students get the resources they need for their thesis, capstone, or research projects.

                        As students ourselves, we understand how challenging it can be to find reliable and relevant sources of information for academic projects. With the proliferation of information on the internet, it can be overwhelming to sift through all the data and determine what is trustworthy and useful.
                    </p>
                    <p>
                        Our team recognized the need for a centralized platform that could simplify the research process and provide students with access to high-quality resources. We have designed this system to be user-friendly, intuitive, and comprehensive. With our platform, students can search for thesis, capstone project, and research materials related to their field of study, and easily cite and reference them in their work.

                        We believe that this system will be a valuable tool for students at JHSCS College and beyond. Our team is committed to continuously improving the platform, incorporating feedback from users, and staying up-to-date with the latest developments in research and technology.

                        Thank you for visiting our page. We hope that our platform will help you achieve academic success and contribute to the advancement of knowledge in your field.</p>

                </div>
                <div class="col-md-6 justify-content-center align-items-center d-flex ">
                    <img src="./logo.png" class="img-fluid" alt="Placeholder image">
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="pb-5 text-success"> School Mission And Vision</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-success">Mission</h2>
                    <p>J.H. CERILLES STATE COLLEGE being an educational institution is tasked to be a change agent in an identified community whose main thrust is to institute community and extension projects and outreach services.</p>
                </div>
                <div class="col-md-6">
                    <h2 class="text-success">Vision</h2>
                    <p>J.H. CERILLES STATE COLLEGE is in the forefront of community development particularly at the Barangay level. As leader institution, it is a vital force in the development of citizens who are capable of improving lives and the community.</p>
                </div>
            </div>
        </div>
    </section>







    <?php require_once "includes/footer.php" ?>