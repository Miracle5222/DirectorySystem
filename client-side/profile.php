<?php
session_start();
?>

<?php if (!isset($_SESSION['student_id'])) {
    header("Location: index.php");
} ?>

<?php require_once "includes/header.php" ?>
<?php include "./connection/config.php" ?>
<?php include "./query.php" ?>
<title>Research Office Directory System | Visit Request</title>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>



</head>


<body>
    <div class="w-100  bg-light ">
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg  navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="dashboard.php">Research Office Directory System</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <div class="d-flex justify-content-between flex-direction w-100">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link" href="profile.php">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="visitRequest.php">Visit Request</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="#">About</a>
                                </li>
                            </ul>
                            <?php if (!isset($_SESSION['student_id'])) {
                                header("Location: index.php");
                            } else { ?>
                                <div>
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a href="logout.php" class="nav-link text-dark">Logout</a>
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
    <div class="container my-4 ">
        <div class="row">
            <div class="col-md-5">
                <?php
                if (isset($_POST['updateStudent'])) {
                    $id = $_SESSION['student_id'];
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
                            Student Updated successfully.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } else { ?>



                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Failed Update!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
        <div class="row">

            <!-- Column -->
            <!-- Column -->

            <?php

            $sql = "SELECT * from student_tbl where student_id = '$_SESSION[student_id]'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {


            ?>
                    <div class="col-lg-5 col-xlg-9 col-md-12">
                        <div>
                            <h2 class="text-info text-center py-2">Profile</h2>
                        </div>

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

        </div>


    </div>







    <?php require_once "includes/footer.php" ?>