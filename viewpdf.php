<?php include "./connection/config.php" ?>

<?php
$record_id = $_GET['id'];



$sql2 = "SELECT fileName from record_tbl where record_id = '$record_id'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$row2['fileName'];
?>


<iframe src="<?php echo $path.$pdf; ?>" width="90%" height="500px">

<?php

// The location of the PDF file
// on the server
$filename = "./pdf/$row2[fileName]";

// Header content type
header("Content-type: application/pdf");

header("Content-Length: " . filesize($filename));

// Send the file to the browser.
readfile($filename);

$conn->close();
?>