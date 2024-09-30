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
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $roompreference = $_POST['roompreference'];
    $guestpreference = $_POST['guestpreference'];
    $hotel = $_POST['hotel'];

    // Prepared statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO `HOTELFORM` (name, email, phone, checkin, checkout, roompreference, guestpreference, hotel) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Corrected the variable name from $mail to $email
    $stmt->bind_param("ssssssss", $name, $email, $phone, $checkin, $checkout, $roompreference, $guestpreference, $hotel);

    if ($stmt->execute()) {
        echo "Data recorded";
    } else {
        echo "Failed to record data: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
