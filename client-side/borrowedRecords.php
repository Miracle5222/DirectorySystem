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
        <div class="row">
            <div class="container">
                <div class="bg-light p-4">
                    <h1>Borrowed Request</h1>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Record ID</th>
                                <th scope="col">Retured Date</th>
                                <th scope="col">Date Borrowed</th>
                                <th scope="col">Status</th>
                                <th scope="col">Return</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $sql = "SELECT * from borrowed_tbl where schoolId = '$_SESSION[school_id]'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <th scope="row"><?= $row['borrowed_id'] ?></th>
                                        <td><?= $row['record_id'] ?></td>
                                        <td><?= $row['return_date'] ?></td>
                                        <td><?= $row['date_today'] ?></td>

                                        <?php
                                        if ($row['status'] === 'Active') { ?>
                                            <td class="text-success"><?= $row['status'] ?></td>
                                        <?php } else if ($row['status'] === 'Pending...') { ?>
                                            <td class="text-info"><?= $row['status'] ?></td>
                                        <?php    } else { ?>
                                            <td class="text-warning"><?= $row['status'] ?></td>
                                        <?php        }
                                        ?>

                                        <td>
                                            <?php
                                            if ($row['status'] === 'Pending...') {    ?>
                                                <span class="text-success">Proccess..</span>
                                            <?php  } else { ?>
                                                <a href="./returndData.php?borrowed_id=<?= $row['borrowed_id'] ?>">Return Record</a>
                                            <?php
                                            }
                                            ?>

                                            <!-- <form>
                                                <input type="text" id="borrowed_id" value='<?= $row['borrowed_id'] ?>' hidden name="recordid">

                                                <button class="btn btn-primary" onclick="submitData()">Return Record</button>
                                            </form> -->
                                        </td>
                                        <!-- <td><i class="fas fa-edit"></i></td> -->
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
            <div class="container">
                <div class="bg-light p-4">
                    <h1>My Borrowed Records</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Record ID</th>
                                <th scope="col">Retured Date</th>
                                <th scope="col">Date Borrowed</th>
                                <th scope="col">Status</th>
                                <th scope="col">Return</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $sql = "SELECT * from borrowed_tbl where schoolId = '$_SESSION[school_id]'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <th scope="row"><?= $row['borrowed_id'] ?></th>
                                        <td><?= $row['record_id'] ?></td>
                                        <td><?= $row['return_date'] ?></td>
                                        <td><?= $row['date_today'] ?></td>

                                        <?php
                                        if ($row['status'] === 'Active') { ?>
                                            <td class="text-success"><?= $row['status'] ?></td>
                                        <?php } else if ($row['status'] === 'Pending...') { ?>
                                            <td class="text-info"><?= $row['status'] ?></td>
                                        <?php    } else { ?>
                                            <td class="text-warning"><?= $row['status'] ?></td>
                                        <?php        }
                                        ?>

                                        <td>
                                            <?php
                                            if ($row['status'] === 'Pending...') {    ?>
                                                <span class="text-success">Proccess..</span>
                                            <?php  } else { ?>
                                                <a href="./returndData.php?borrowed_id=<?= $row['borrowed_id'] ?>">Return Record</a>
                                            <?php
                                            }
                                            ?>

                                            <!-- <form>
                                                <input type="text" id="borrowed_id" value='<?= $row['borrowed_id'] ?>' hidden name="recordid">

                                                <button class="btn btn-primary" onclick="submitData()">Return Record</button>
                                            </form> -->
                                        </td>
                                        <!-- <td><i class="fas fa-edit"></i></td> -->
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








    <?php require_once "includes/footer.php" ?>