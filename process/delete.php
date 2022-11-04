<?php include "../connection/config.php" ?>


<?php


$id = $_GET['id'];
$fileName = "../pdf/$_GET[file]";

$sql = "DELETE FROM record_tbl WHERE record_id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    if (!unlink($fileName)) {
        echo ("$fileName cannot be deleted due to an error");
    } else {
        echo ("$fileName has been deleted");
    }
    header("Location: ../records.php");
} else {
    echo "Error deleting record: " . $conn->error;
    header("Location: ../records.php");
}


if (isset($_GET['deleteStaff'])) {

    $id = $_GET['deleteStaff'];
    $sql = "DELETE FROM staff_tbl WHERE staff_id='$id'";
    $fileName = "../images/$_GET[profile]";

    if ($conn->query($sql) === TRUE) {
        echo "Staff deleted successfully";
        if (!unlink($fileName)) {
            echo ("$fileName cannot be deleted due to an error");
        } else {
            echo ("$fileName has been deleted");
        }
        header("Location: ../staff.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../staff.php");
    }
}

if (isset($_GET['deleteStudent'])) {

    $id = $_GET['deleteStudent'];
    $sql = "DELETE FROM student_tbl WHERE student_id='$id'";
    $fileName = "../images/$_GET[profile]";

    if ($conn->query($sql) === TRUE) {
        echo "student deleted successfully";
        if (!unlink($fileName)) {
            echo ("$fileName cannot be deleted due to an error");
        } else {
            echo ("$fileName has been deleted");
        }
        header("Location: ../addStudents.php");
    } else {
        echo "Error deleting record: " . $conn->error;
        header("Location: ../addStudents.php");
    }
}


?>