<?php
session_start();
?>

<?php include "../connection/config.php" ?>
<?php
// If submit button is clicked
if (isset($_POST['submit'])) {
    // get name from the form when submitted


    $title = $_POST['title'];
    $date = $_POST['date'];
    $type = $_POST['type'];
    $department_name = $_POST['course'];
    $status = "available";

    if (isset($_FILES['pdf_file']['name'])) {
        $file_name = $_FILES['pdf_file']['name'];
        $file_tmp = $_FILES['pdf_file']['tmp_name'];

        move_uploaded_file($file_tmp, "../pdf/" . $file_name);
        $insertquery =
            "INSERT INTO record_tbl(title,date,status,type,department_name,fileName) VALUES('$title','$date','$status','$type','$department_name','$file_name')";


        // Execute insert query
        $iquery = mysqli_query($conn, $insertquery);

        if ($iquery) { ?>


            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Data submitted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div><?php
                    header("Location: ../addRecords.php");
                } else {

                    ?>

            <div class="alert alert-warndangering alert-dismissible fade show" role="alert">
                <strong>Failed!</strong> Try Again!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div><?php
                    header("Location: ../addRecords.php");
                }
            } else {

                    ?> <div class="alert alert-warndangering alert-dismissible fade show" role="alert">
            <strong>Failed!</strong> File must be uploaded in PDF format!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div><?php

                header("Location: ../addRecords.php");
            } // end if
        } // end if

                ?>