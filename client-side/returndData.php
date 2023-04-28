<?php
session_start();
?>

<?php if (!isset($_SESSION['student_id'])) {
    header("Location: index.php");
} ?>

<?php include "./connection/config.php" ?>



<?php

$id =  $_GET['borrowed_id'];
$sql = "SELECT * from borrowed_tbl where borrowed_id = '$id'";

echo "alert($id)";
$result = $conn->query($sql);
if (isset($_GET['borrowed_id'])) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {


            $date_borrowed = $row['date_today'];
            $record_id = $row['record_id'];
            $return_date = $row['return_date'];
            $student_id = $row['schoolId'];
            $status = "Pending...";

            $borrowed_datetime = new DateTime($date_borrowed);
            $returned_datetime = new DateTime($return_date);

            $days_diff = $returned_datetime->diff($borrowed_datetime)->days;

            $penalty = $days_diff  * 50;

            $insertquery =
                "INSERT INTO return_tbl(record_id,schoolId,date_borrowed,date_today,penalty,status) VALUES('$record_id ','$student_id','$date_borrowed','$return_date','  $penalty','$status')";
            // Execute insert query
            $iquery = mysqli_query($conn, $insertquery);

            if ($iquery) {
                echo "success";

                // $updatequery =
                //     "update record_tbl set status = 'Available' where record_id = '$record_id'";
                // $iquery = mysqli_query($conn, $updatequery);

                $updateBorrowed =
                    "update borrowed_tbl set status = 'Pending...' where record_id = '$record_id'";
                $dquery = mysqli_query($conn, $updateBorrowed);
            } else {
                echo "failed";
            }
        }
    }
}
