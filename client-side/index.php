<?php
session_start();
?>
<?php include "./connection/config.php" ?>
<?php require_once "includes/header.php" ?>

<title>Login Page</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>



    <div class="container">

        <div class="row">

            <div class="col text-center d-flex justify-content-center align-items-center  " style="height: 100vh; z-index:99; ">
                <div class="card" style="height: auto; width:320px;">
                    <div class="p-4">
                        <?php

                        if (isset($_POST['submit'])) {
                            $student_id = $_POST['student_id'];
                            $password = $_POST['password'];
                            $query = "select * from student_tbl";
                            $results = $conn->query($query);
                            if ($results->num_rows > 0) {
                                while ($row = $results->fetch_assoc()) {
                                    if ($student_id == $row['schoolId'] && $password == $row['password']) {
                                        $_SESSION['fullname'] = $row['fname'] . " " . $row['lname'];
                                        $_SESSION['student_id'] = $row['student_id'];
                                        $_SESSION['school_id'] = $row['school_id'];
                                        echo     $_SESSION['fullname'];
                                        header("Location: ./dashboard.php");
                                    } else {
                                        if ($student_id != $row['student_id']) {
                                            $GLOBALS['invalid'] = '<div class="alert alert-warning alert-dismissible fade show my-2" role="alert">
                                            <strong>Invalid Student ID</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
                        ?>



                                        <?php }
                                        if ($password != $row['password']) {
                                            $GLOBALS['invalidPassword'] = '
                                            <div class="alert alert-warning alert-dismissible fade show my-2" role="alert">
                                                <strong>Invalid Password</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                        ?>

                        <?php
                                        }
                                    }
                                }
                            }
                        }
                        ?>



                        <h2 class="text-info pb-4">Login Form</h2>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group text-left">
                                <label for="student_id">Student ID</label>
                                <input type="text" id="student_id" name="student_id" placeholder="2023-13612" class="form-control">
                                <?php if (isset($GLOBALS['invalid'])) {
                                    echo  $GLOBALS['invalid'];
                                } ?>

                            </div>
                            <div class="form-group  text-left">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="password..." class="form-control">
                                <?php if (isset($GLOBALS['invalidPassword'])) {
                                    echo  $GLOBALS['invalidPassword'];
                                } ?>
                            </div>
                            <div class="form-group ">

                                <input type="submit" name="submit" class="btn btn-success">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="background">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>

        </div>



    </div>

    <?php require_once "includes/footer.php" ?>