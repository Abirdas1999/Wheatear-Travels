<?php
$servername = "localhost";
$username = "u761644300_travels";
$password = "Travel@2024";
$dbname = "u761644300_wheatear";
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $imageCount = count($_FILES['image']['name']);
    for ($i=0;$i<$imageCount;$i++){
        $imageName = $_FILES['image']['name'][$i];
        $imageTempName = $_FILES['image']['temp_name'][$i];
        $targetPath = "../Wheatear-TRAVEL/dash/".$imageName;
        if(move_uploaded_file($imageTempName,$targetPath)){
            $sql = "INSERT INTO images(image)VALUES('$imageName')";
            $result = mysqli_query($conn,$sql);
        }
        if($result){
            header('location:index.php?msg=ins');
        }

    }
}

$conn->close();
?>
