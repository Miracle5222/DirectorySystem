<?php include "./connection/config.php" ?>

<?php
$q = isset($_GET['q']);


$sql = "SELECT * from borrow_tbl order by $q";
$result = $conn->query($sql);
?>
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
       <?php
        echo " <tr>";
        echo  "<td>" . $row['br_id'] . "</td>";
        echo   "<td>" . $row['purpose'] . "</td>";
        echo   "<td>" . $row['student_id'] . "</td>";
        echo  "<td>" . $row['visit_date'] . "</td>";
        echo "<td>" . $row['record_id'] . "</td>";
        echo  "<td><small class='d-block text-warning'>" . $row['borrow_status'] . "</small></td>";
        echo  "<td><a href='#' class='btn btn-success m-2 text-light'>Grant</a><a href='#' class='btn btn-danger text-light'>Decline</a></td>";

        " <tr>" ?>
<?php
    }
}

$conn->close();
?>