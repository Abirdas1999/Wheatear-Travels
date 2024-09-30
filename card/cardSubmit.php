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
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $tdate = $_POST['tdate'];
    $tcount = $_POST['tcount'];
    $sms = $_POST['sms'];

    // Prepared statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO `PACKAGEFORM` (name, mail, phone, tdate, tcount, sms) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $mail, $phone, $tdate, $tcount, $sms);

    if ($stmt->execute()) {
        echo "Data recorded";
    } else {
        echo "Failed to record data: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
