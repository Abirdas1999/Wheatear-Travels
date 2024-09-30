
<?php
session_start();
$conn = mysqli_connect("localhost", "u761644300_travels", "Travel@2024", "u761644300_wheatear");
    if(!$conn){
        die("Connection Error");
    }

if(isset($_POST['submit']))
{
    $all_id = $_POST['stud_delete_id'];
    $extract_id = implode(',' , $all_id);
    // echo $extract_id;

    $query = "DELETE FROM flightform WHERE id IN($extract_id) ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Multiple Data Deleted Successfully";
        header("Location: photos.php");
    }
    else
    {
        $_SESSION['status'] = "Multiple Data Not Deleted";
        header("Location: photos.php");
    }
}
?>