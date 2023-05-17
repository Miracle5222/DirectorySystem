<?php
// Set the time interval (in seconds) after which the page should be reloaded
$reloadInterval = 3; // 24 hours

// Get the current page URL
$pageURL = $_SERVER['REQUEST_URI'];

// Set the refresh header to reload the page
header("Refresh: $reloadInterval; URL=$pageURL");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Automatic Page Reload</title>
    <script>
        // JavaScript function to reload the page after the specified time interval
        setTimeout(function() {
            location.reload();
        }, <?php echo $reloadInterval * 1000; ?>); // Convert the interval to milliseconds
    </script>
</head>

<body>
    <h1>Automatic Page Reload</h1>
    <p>This page will automatically reload every 24 hours.</p>
</body>

</html>