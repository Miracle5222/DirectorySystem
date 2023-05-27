<?php
session_start();
?>
<?php if (!isset($_SESSION['username'])) {
    header("Location: index.php");
} ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Research Office Directory System | Returned Records</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="./css/mystyle.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <!-- table styles -->
    <!-- <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="  https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <script>
        // JavaScript code to trigger the print functionality
        window.onload = function() {
            window.print();
        };
    </script>
    <div class="container">
        <div class="row d-flex justify-content-center w-100">
            <div class="col-md-10">
                <div>
                    <h1 class="fw-600 text-info">Return Records</h1>
                </div>
                <div>

                    <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Title of Studies</th>
                            <th>Department</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Penalty</th>
                            <th>Date</th>

                        </tr>
                        <?php include "./connection/config.php" ?>
                        <?php
                        $sql = "SELECT record_tbl.`record_id` ,record_tbl.`fileName`, return_tbl.penalty,record_tbl.`department_name`,record_tbl.`type`,record_tbl.`status`, record_tbl.`recordBookStatus`,record_tbl.`date` FROM record_tbl inner JOIN return_tbl ON record_tbl.`record_id` = return_tbl.`record_id`";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {

                            while ($row = $result->fetch_assoc()) {
                                $exp = explode('.', $row['fileName']);

                        ?>

                                <tr class="fs-4" style="height:100px;">
                                    <td> <?= $row['record_id'] ?></td>
                                    <!-- <td><a href="./viewpdf.php?id=<?= $row['record_id'] ?>" target="_blank" type="button" class="btn btn-primary">View No. <?= $row['record_id'] ?> </a></td> -->
                                    <td><?= $exp[0] ?></td>

                                    <td><?= $row['department_name'] ?></td>
                                    <td><?= $row['type'] ?></td>
                                    <td>
                                        <?php if ($row['status'] == "Available") { ?> <small class="d-block text-success fs-4"><?= $row['status'] ?></small>
                                        <?php } else { ?>
                                            <small class="d-block text-danger fs-4"><?= $row['status'] ?></small>
                                        <?php } ?>
                                    </td>

                                    <?php
                                    if ($row['recordBookStatus'] == "Good Condition") { ?>
                                        <td class="text-success">Good Condition</td>
                                    <?php   } else {    ?>
                                        <td class="text-warning"><?= $row['recordBookStatus'] ?></td>
                                    <?php  }
                                    ?>
                                    <td><?= $row['penalty'] ?></td>
                                    <td><?= $row['date'] ?></td>

                                </tr>
                        <?php
                            }
                        }

                        $conn->close();
                        ?>

                    </table>
                </div>

            </div>
        </div>
    </div>



</body>

</html>