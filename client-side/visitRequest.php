<?php
session_start();
?>

<?php if (!isset($_SESSION['student_id'])) {
    header("Location: index.php");
} ?>

<?php require_once "includes/header.php" ?>
<?php include "./connection/config.php" ?>
<?php include "./query.php" ?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<title>Research Office Directory System | Visit Request</title>




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

    <div class="container my-4 ">
        <!-- <div class="row">
            <div class="col-md-4">
                <?php

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
        </div>
        <div class="row">
            <?php


            if (isset($_GET['recordID'])) { ?>
                <div class="col-sm-4">
                    <div class="white-box">
                        <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Record Type</label>
                                <input type="text" placeholder="Purpose..." name="purpose" class="form-control" />

                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Student ID</label>
                                <input type="text" placeholder="2023-13612" name="student_id" value="<?= $_SESSION['school_id'] ?>" class="form-control" />

                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Visit Date</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="date" class="form-control p-0 border-0" name="visit_date" required name="date" />
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Record ID</label>
                                <input type="text" placeholder="326" value="<?= $_GET['recordID'] ?>" name="record_id" class="form-control" />

                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <input type="submit" name="submit" required class="btn btn-success" />

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            <?php } else {

            ?>

                <div class="col-sm-4">
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
                                <input type="text" placeholder="326" name="record_id" class="form-control" />

                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <input type="submit" name="submit" required class="btn btn-success" />

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php  } ?> -->

        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="card bg-light border-0 p-4">
                <h3 class="box-title text-info" id="hint">Visit Request</h3>
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
                        <!-- canel request-->
                        <?php
                        if (isset($_GET['br_id'])) {
                            $br_id = $_GET['br_id'];
                            $deletequery =
                                "delete from borrow_tbl where br_id = '$br_id'";
                            $dquery = mysqli_query($conn, $deletequery);
                        }
                        ?>


                        <?php
                        $q = isset($_GET['q']);


                        $sql = "SELECT * from borrow_tbl where schoolId = '$_SESSION[school_id]'";
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
                                    <th class="border-top-0">Edit</th>
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
                                            <td><a href="../viewpdf.php?id=<?= $row['record_id'] ?>" target="_blank" type="button" class="btn btn-primary">View No. <?= $row['record_id'] ?> </a></td>
                                            <td>
                                                <?php if ($row['borrow_status'] == "pending") { ?>
                                                    <small class="d-block text-info fs-5"><?= $row['borrow_status'] ?></small>
                                                <?php } elseif ($row['borrow_status'] == "Declined") {
                                                ?>
                                                    <small class="d-block text-danger fs-5"><?= $row['borrow_status'] ?></small>
                                                <?php
                                                } else { ?>
                                                    <small class="d-block text-success fs-5"><?= $row['borrow_status'] ?></small>
                                                <?php



                                                } ?>

                                            </td>
                                            <?php

                                            if ($row['borrow_status'] == "Granted") { ?>
                                                <td><a href="#" class=" text-info">...</a></td>

                                            <?php    } else { ?>
                                                <td><a href="./visitRequest.php?br_id=<?= $row['br_id']  ?>" onclick="return confirm('Are you sure you want to cancel your visit?')" class=" text-danger">Cancel</a></td>
                                            <?php  }
                                            ?>




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

    </div>

    </div>

    <script>
        function submitData() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }
            };
            xhttp.open("POST", "returndData.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            var data = "borrowed_id=" + document.getElementById("borrowed_id").value;
            xhttp.send(data);
        }
    </script>







    <?php require_once "includes/footer.php" ?>