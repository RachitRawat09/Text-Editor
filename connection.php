<?php
// Step 1: Database connection

// Create connection to the database on port 3307
$conn = new mysqli("localhost", "root", "", "text_editor", "3307");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Step 2: Process the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the form data (editor_content) is set
    if (isset($_POST['editor_content'])) {
        // Get the content from CKEditor and escape to avoid SQL injection
        $editor_content = mysqli_real_escape_string($conn, $_POST['editor_content']);

        // Step 3: Insert the content into the database
        $sql = "INSERT INTO info (content) VALUES ('$editor_content')";

        // Check if the query executed successfully
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Content Saved Successfully !!")</script>';
        } 
    } else {
        echo '<script>alert("No content found to save.")</script>';
    }
}

// Step 4: Close the connection
$conn->close();
?>
