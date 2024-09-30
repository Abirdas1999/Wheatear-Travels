<?php
$servername = "localhost";
$username = "u761644300_travels"; // replace with your database username
$password = "Travel@2024"; // replace with your database password
$dbname = "u761644300_wheatear"; // replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $timepreference = $_POST['timepreference'];
    $deperturecity = $_POST['deperturecity'];
    $destinationcity = $_POST['destinationcity'];
    $passenger = $_POST['passenger'];
    $passengerpreference = $_POST['passengerpreference'];
    $classpreference = $_POST['classpreference'];

    // Prepared statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO `FLIGHTFORM` (name, email, phone, gender, checkin, checkout, timepreference, deperturecity, destinationcity, passenger, passengerpreference, classpreference) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Corrected the variable name from $mail to $email
    $stmt->bind_param("ssssssssssss", $name, $email, $phone, $gender, $checkin, $checkout, $timepreference, $deperturecity, $destinationcity, $passenger, $passengerpreference, $classpreference);

    if ($stmt->execute()) {
        echo "Data recorded";
    } else {
        echo "Failed to record data: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
