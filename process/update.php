<?php include "../connection/config.php" ?>


<?php
$record_id = $_GET['id'];
$sql = "update borrow_tbl set borrow_status = 'Declined' where br_id = '$record_id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: ../dashboard.php");
} else {
    echo "Error deleting record: " . $conn->error;
}




?>