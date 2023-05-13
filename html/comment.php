<?php 
session_start();
$UID = $_SESSION["user_id"];

include "db.php";
$sql = "SELECT * FROM account_tb
            WHERE user_id = $UID";
            
    $result = $dbconn->query($sql);
    
    $user = $result->fetch_assoc();
    $name = $user["name"];
    
    $dp = $user["profile_picture_name"];


if(isset($_POST["submit_comment"])){
    $commentSQL = "INSERT INTO comment (user_id, content, post_id,username) VALUES (?,?,?,?)";
    $commentStmt = $dbconn -> stmt_init();
    $commentStmt->prepare($commentSQL);
    $commentStmt->bind_param('isss', 
                            $UID,
                            $_POST["comment"],
                            $_POST["post_id"],
                            $name
                        );
    if($commentStmt->execute()){
    header("location: index.php");
    }
}


?>