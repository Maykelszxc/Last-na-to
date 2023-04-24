<?php
session_start();
if (isset($_POST['submit'])) {
    $image_file = $_FILES['image'];
    $image_name = $image_file['name'];
    $image_data = ($image_file['tmp_name']);
    $extension = explode('.',$image_name);
    $fileActualExt = strtolower(end($extension));
    $newName = uniqid('', true).".".$fileActualExt;
    $folder='../img/profile-images/';



    $folder='../img/profile-images/';
    
    $dbconn = require __DIR__ . "/db.php";
    $user_id= ("SELECT * FROM account_tb
    WHERE user_id = $_SESSION[user_id]");

    $result = $dbconn->query($user_id);

    $UID = $_SESSION["user_id"];
    
    $id = $result->fetch_assoc();

    $sql = "UPDATE account_tb set  profile_picture_name='" . $newName .  "' WHERE user_id='" . $UID. "'";

   if (mysqli_query($dbconn, $sql)){
    move_uploaded_file($image_data,$folder.$newName);
    header("location:profile.php");
   }

   
}