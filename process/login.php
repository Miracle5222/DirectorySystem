<?php session_start(); ?>
<?php include "../connection/config.php" ?>
<?php

$username = $_POST['username'];
$password = $_POST['password'];



if (isset($_POST['submit'])) {

    $query = "select * from staff_tbl";
    $results = $conn->query($query);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            if ($username == $row['username'] && $password == $row['password']) {

                $_SESSION['username'] = $row['username'];

                $_SESSION['staff_id'] = $row['staff_id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['profile'] = $row['profile'];
                $_SESSION['admin_type'] = $row['admin_type'];
                // header("Location: ../dashboard.php");
            } else {
                if ($username == $row['username']) {
                    $_SESSION['username'] = $row['username'];
                } else {
                    echo "Wrong Username ";
                }
                if ($password == $row['password']) {
                    $_SESSION['password'] = $row['password'];
                } else {
                    echo "Wrong Password";
                }
            }
        }
    }
}

if (isset($_POST['submit'])) {

    $query = "select * from admin_tbl";
    $results = $conn->query($query);
    if ($results->num_rows > 0) {
        while ($row = $results->fetch_assoc()) {
            if ($username == $row['username'] && $password == $row['password']) {

                $_SESSION['username'] = $row['username'];

                $_SESSION['admin_id'] = $row['admin_id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['admin_type'] = $row['admin_type'];

                header("Location: ../dashboard.php");
            } else {
                if ($username == $row['username']) {
                    $_SESSION['username'] = $row['username'];
                } else {
                    echo "Wrong Username ";
                }
                if ($password == $row['password']) {
                    $_SESSION['password'] = $row['password'];
                } else {
                    echo "Wrong Password";
                }
            }
        }
    }
}





// $_SESSION['username'] = $row1['username'];
// $_SESSION['email'] = $row1['email'];
// $_SESSION['admin_type'] = $row1['admin_type'];
// $_SESSION['profile'] = $row1['profile'];
$conn->close();
