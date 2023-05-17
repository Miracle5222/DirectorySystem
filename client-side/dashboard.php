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
                                <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        Profile
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="profile.php">Account</a>
                                        <a class="dropdown-item" href="visitRequest.php">Visit Request</a>
                                        <a class="dropdown-item" href="borrowedRecords.php">Borrowed Records</a>
                                    </div>
                                </div>
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


    <div class="container  ">
        <div class="mt-4"> <?php

                            if (isset($_POST['submit'])) {
                                // $id = $_SESSION['staff_id'];

                                $purpose = $_POST['purpose'];
                                $student_id = $_POST['student_id'];
                                $visit_date = $_POST['visit_date'];
                                $record_id = $_POST['record_id'];
                                $borrowStatus = "pending";



                                $addquerry = "insert into borrow_tbl(purpose,schoolId,visit_date,borrow_status,record_id) values ('$purpose','$student_id','$visit_date','$borrowStatus','$record_id ')";
                                $iquery = mysqli_query($conn, $addquerry);


                                if ($iquery) { ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> your request is being process...
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } else { ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> Failed request visit</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                                }
                            }

            ?>
        </div>
        <div class="row  justify-content-center align-items-center mt-4 bg " style="height: 300px; ">
            <!-- <div style="height: 300px; ">
                <img src="../images/drbg.jpg" alt="image" height="100%" class="bg" />
            </div> -->
            <h1 style="font-size:3rem;" class="text-white">Research Office Directory System</h1>
        </div>
        <div class="row d-flex justify-content-center w-100 my-4">
            <div class="col-md-3 ">
                <div class="card bg-success border-0" style="width: 17rem;">

                    <div class="card-body">
                        <h5 class="card-title text-white ">Total Students</h5>
                        <h1 class="text-white"><?= $_SESSION['TotalStudent']  ?></h1>

                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card bg-dark border-0" style="width: 17rem;">

                    <div class="card-body">
                        <h5 class="card-title text-white">Total Records</h5>
                        <h1 class="text-white"><?= $_SESSION['totalRecords'] ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card bg-info border-0" style="width: 17rem;">

                    <div class="card-body ">
                        <h5 class="card-title text-white">Total Visit Request</h5>
                        <h1 class="text-white"><?= $_SESSION['totalReq'] ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card bg-secondary border-0" style="width: 17rem;">

                    <div class="card-body ">
                        <h5 class="card-title text-white">Total Borrowed</h5>
                        <h1 class="text-white"><?= $_SESSION['TotalBorrowed'] ?></h1>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="container my-4  bg-light ">

        <div class="row mx-2 p-4">


            <div class="modal fade" id="myModal">

                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Visit Request</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="white-box">
                                <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Record Type</label>
                                        <input type="text" placeholder="Purpose..." name="purpose" class="form-control" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Student ID</label>
                                        <input type="text" placeholder="2023-13612" value="<?= $_SESSION['school_id'] ?>" name="student_id" class="form-control" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Visit Date</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="date" class="form-control p-0 border-0" name="visit_date" required name="date" />
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Record ID</label>
                                        <!-- <input type="text" placeholder="326" name="record_id" class="form-control" /> -->
                                        <select class="custom-select" aria-label="Default select example" required name="record_id">
                                            <?php
                                            $sql = " SELECT * from record_tbl";
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
                                        <div class="col-sm-12">
                                            <input type="submit" name="submit" required class="btn btn-success" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table id="example" class="table table-stripe  bg-light" style="width:100%">
                <thead>

                    <tr>
                        <th class="border-top-0 th-lg">ID</th>
                        <th class="border-top-0 th-lg">Title of Studies</th>
                        <th class="border-top-0 th-lg">Department</th>
                        <th class="border-top-0 th-lg">Type</th>
                        <th class="border-top-0 th-lg">Status</th>
                        <th class="border-top-0 th-lg">Date</th>
                        <th class="border-top-0 th-lg">Request</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = " SELECT * FROM record_tbl where status='Available'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $exp = explode('.', $row['fileName']);

                    ?>

                            <tr class="fs-4" style="height:100px;">
                                <td><a href="../viewpdf.php?id=<?= $row['record_id'] ?>" target="_blank" type="button" class="btn btn-primary">View No. <?= $row['record_id'] ?> </a></td>
                                <td class="text-dark fs-6"><?= $exp[0] ?></td>
                                <td class="text-dark fs-6"><?= $row['department_name'] ?></td>
                                <td class="text-dark fs-6"><?= $row['type'] ?></td>
                                <td>
                                    <?php if ($row['status'] == "Available") { ?> <small class="d-block text-success fs-6"><?= $row['status'] ?></small>
                                    <?php } else { ?>
                                        <small class="d-block text-danger fs-6"><?= $row['status'] ?></small>
                                    <?php } ?>
                                </td>

                                <td class="text-dark fs-6"><?= $row['date'] ?></td>
                                <!-- <td class="text-dark fs-6"> <a class="btn btn-success d-flex" data-toggle="modal" data-target="#myModal">Request Visit</a></td> -->
                                <td class="text-dark fs-6"> <a href="dashboard.php?recordID=<?= $row['record_id'] ?>" class="btn btn-success d-flex" data-toggle="modal" data-target="#myModal">Request Visit</a></td>
                            </tr>
                    <?php
                        }
                    }

                    $conn->close();
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>
        </div>


    </div>





    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>




    <?php require_once "includes/footer.php" ?>