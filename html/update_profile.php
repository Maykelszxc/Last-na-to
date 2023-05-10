<?php 
session_start();

include "db.php";

$UID = $_SESSION["user_id"];

$sql = "SELECT * FROM account_tb WHERE user_id = $UID";

$sqlQuery =$dbconn->query($sql);
$result = $sqlQuery->fetch_assoc();

$username = $result["username"];
$old_password = $result["password"];
$name = $result["name"];
$email = $result["email_address"];
$profile = $result["profile_picture_name"]



?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/update-profile.css">

</head>
<body>
   
<div class="update-profile">


   <form action="profileu.php" method="post" enctype="multipart/form-data">
      
      <div class="flex">
         <div class="inputBox">

            <span>Name :</span>
            <input type="text" id= "update_name" name="update_name" class="box" value=<?=$name?>>

            <span>Username :</span>
            <input type="text" id= "update_username" name="update_username" class="box" value=<?=$username?>>

            <span>Your email :</span>
            <input type="email" id="update_email" name="update_email" class="box" value=<?=$email?>>

            <span>Update your profile picture :</span>
            <input type="file" id="update_image" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box" value=<?=$profile?>>

            <span>Update your cover photo :</span>
            <input type="file" id="update_cover" name="update_cover" accept="image/jpg, image/jpeg, image/png" class="box">
            
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass">
            <span>Old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">

            <span>New password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">

            <span>Confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>

      <input type="submit" value="Update Profile" id="submit" name="submit" class="btn">
      <a href="../html/profile.php" class="delete-btn">Go back</a>
   </form>

</div>

</body>
</html>