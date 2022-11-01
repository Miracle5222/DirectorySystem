
<?php include "./connection/config.php" ?>

<?php
$sql = "SELECT count(br_id) as totalRequest from borrow_tbl";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$_SESSION['totalReq'] = $row['totalRequest'];


$sql1 = "SELECT count(staff_id) as totalStaff from staff_tbl";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$_SESSION['totalStaff'] = $row1['totalStaff'];


$sql2 = "SELECT count(record_id) as totalRecords from record_tbl";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$_SESSION['totalRecords'] = $row2['totalRecords'];

$sql4 = "SELECT count(borrowed_id) as TotalBorrowed from borrowed_tbl";
$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();
$_SESSION['TotalBorrowed'] = $row4['TotalBorrowed'];


$date = date('Y-m-d', strtotime('-5 days'));

$sql3 = "delete from borrow_tbl where visit_date < '$date'";
$result3 = $conn->query($sql3);

// if ($conn->query($sql3) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }



$conn->close();
