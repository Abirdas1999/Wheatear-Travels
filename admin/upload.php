<?php
if (isset($_POST['submit']) && isset($_FILES['photo'])){
     echo "<pre>";
      print_r($_FILES['photo']);
     echo "</pre>";

     $img_name = $FILES['photo']['name'];
     $img_size = $FILES['photo']['size'];
     $error = $FILES['photo']['error'];

     if ($error === 0){
        if($photo > 125000) {
            $em = "sorry, your file is too lerge.";
            header ("Location: photos.php?error=$em");
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = unique("IMG-" true). '.' .$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO images(photo) VALUES($new_img_name)";
                mysqli_query($conn, $sql);
                header("Location: ");
            }else{
                $em = "You can't upload files of this type";
                header ("Location: photos.php?error=$em");
            }
        }
     }else{
        $em = "unknown error occurred!";
        header ("Location: photos.php?error=$em");
     }
}else{
    $em  
    header("Location: photos.php");
} 
?>