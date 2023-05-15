
<?php include "./connection/config.php" ?>
<?php


// Retrieve user's email address from the database
$sql = "SELECT email FROM student_tbl WHERE student_id = 2022"; // Replace '1' with the actual user ID
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $to_email = $row["email"];
    }
} else {
    echo "User not found";
}

// Close database connection
$conn->close();

// Set sender and recipient
$from_email = "roneilbansas5222@gmail.com";
$to_email = $to_email;

// Set email subject and message
$subject = "Test email";
$message = "This is a test email sent from PHP.";

// Set headers
$headers = "From: $from_email\r\n";
$headers .= "Reply-To: $from_email\r\n";
$headers .= "Content-type: text/html\r\n";

// Send email
if (mail($to_email, $subject, $message, $headers)) {
    echo "Email sent successfully to $to_email";
} else {
    echo "Email sending failed";
}
?>
