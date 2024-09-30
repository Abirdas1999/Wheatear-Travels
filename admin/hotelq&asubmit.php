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
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    // Prepared statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO `HOTELQNA` (question, answer) VALUES (?, ?)");

    // Corrected the variable name from $mail to $email
    $stmt->bind_param("ss", $question, $answer);

    if ($stmt->execute()) {
        echo "Data recorded";
    } else {
        echo "Failed to record data: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>