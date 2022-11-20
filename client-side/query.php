
<?php include "./connection/config.php" ?>

<?php
$sql = "SELECT count(br_id) as totalRequest from borrow_tbl";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$_SESSION['totalReq'] = $row['totalRequest'];


$sql2 = "SELECT count(record_id) as totalRecords from record_tbl";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$_SESSION['totalRecords'] = $row2['totalRecords'];

$sql4 = "SELECT count(borrowed_id) as TotalBorrowed from borrowed_tbl";
$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();
$_SESSION['TotalBorrowed'] = $row4['TotalBorrowed'];


$sql5 = "SELECT count(student_id) as TotalStudent from student_tbl";
$result5 = $conn->query($sql5);
$row5 = $result5->fetch_assoc();
$_SESSION['TotalStudent'] = $row5['TotalStudent'];
