
<?php
$servername = "localhost";
$username = "wheateartravels-aarhat"; // replace with your database username
$password = "Wheatear@travel"; // replace with your database password
$dbname = "wheatear-travels"; // replace with your database name

$conn = new mysqli($photo, $image);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $photo = $_FILES['photo']['tmp_name'];
    $image = addslashes(file_get_contents($photo));

    // Prepared statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO `DASHBOARD-PHOTO-SUBMIT` (photo) VALUES (?)");

    // Corrected the variable name from $mail to $email
    $stmt->bind_param("s", $photo, $image);

    if ($stmt->execute()) {
        echo "Data recorded";
    } else {
        echo "Failed to record data: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

