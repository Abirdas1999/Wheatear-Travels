<?php
// process.php

// Capture the file name from the hidden input field
if (isset($_POST['filename'])) {
    $filename = $_POST['filename'];

        // Database connection details
        $servername = "localhost";
        $username = "u761644300_travels"; // replace with your database username
        $password = "Travel@2024"; // replace with your database password
        $dbname = "u761644300_wheatear"; // replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to get the specific row based on the file name
    $sql = "SELECT * FROM dashpackage WHERE file_name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $filename);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the result
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Process the row
            echo "Row ID: " . $row["id"] . " - Data: " . $row["data"] . "<br>";
        }
    } else {
        echo "No results found.";
    }

    // Close the connection
    $stmt->close();
    $conn->close();
} else {
    echo "No filename received.";
}
?>
