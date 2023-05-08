<?php
    session_start();
    include_once "../../db.php";
    $outgoing_id = $_SESSION['user_id'];
    die($outgoing_id);
    $sql = "SELECT * FROM account_tb WHERE NOT user_id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($dbconn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>