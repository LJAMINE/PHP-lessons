<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    // Get file details from $_FILES
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];

    // Display file details
    echo "<h3>File Upload Details:</h3>";
    echo "<p>File Name: $file_name</p>";
    echo "<p>File Size: $file_size bytes</p>";
} else {
    echo "<p>No file uploaded.</p>";
}
?>
