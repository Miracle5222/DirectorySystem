<?php include "../connection/config.php" ?>
<?php

$id = $_GET['id'];


$sql = "update borrowed_tbl set status = 'Rejected' WHERE borrowed_id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: ../borrowed.php");
} else {
    echo "Error deleting record: " . $conn->error;
    header("Location: ../borrowed.php");
}
