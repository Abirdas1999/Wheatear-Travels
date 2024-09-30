<?php
$servername = "localhost";
$username = "u761644300_travels"; // replace with your database username
$password = "Travel@2024"; // replace with your database password
$dbname = "u761644300_wheatear"; // replace with your database name


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no = $_POST['no'];
    $days = $_POST['days'];
    $price = $_POST['price'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $inclusion = $_POST['inclusion'];
    $exclusion = $_POST['exclusion'];
    $event = $_POST['event'];

    // Convert arrays to JSON strings
    $inclusion_json = json_encode($inclusion);
    $exclusion_json = json_encode($exclusion);
    $event_json = json_encode($event);



    // Database connection (replace with your connection details)
    $mysqli = new mysqli("localhost", "u761644300_travels", "Travel@2024", "u761644300_wheatear");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare and bind
    $stmt = $mysqli->prepare("INSERT INTO dashpackage (no, title, subtitle, price, days, inclusion, exclusion, event) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param('ssssssss', $no, $title, $subtitle, $price, $days, $inclusion, $exclusion, $event);
    $stmt->bind_param("ssssssss", $no, $title, $subtitle, $price, $days, $inclusion_json, $exclusion_json, $event_json);

    // Execute statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $mysqli->close();
}
?>