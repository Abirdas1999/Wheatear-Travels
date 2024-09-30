<?php
// Database connection parameters
$servername = "localhost";
$username = "u761644300_travels"; // replace with your database username
$password = "Travel@2024"; // replace with your database password
$dbname = "u761644300_wheatear"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the POST request
$id = $_POST['id'];

// Prepare and execute the SQL query
$sql = "SELECT * FROM dashpackage WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Fetch the data and display it
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Price: " . $row["price"]. " - title: " . $row["title"]. "<br>";
    }
} else {
    echo "No results found for ID: " . $id;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
