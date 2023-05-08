<?php
    session_start();
    include_once "../../db.php";

    $outgoing_id = $_SESSION['user_id'];
    $searchTerm = mysqli_real_escape_string($dbconn, $_POST['searchTerm']);

    $sql = "SELECT * FROM account_tb WHERE NOT user_id = {$outgoing_id} AND name LIKE '%{$searchTerm}%' ";
    $output = "";
    $query = mysqli_query($dbconn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>