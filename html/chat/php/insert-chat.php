<?php 
    session_start();
    if(isset($_SESSION['user_id'])){
        include_once "../../db.php";
        $outgoing_id = $_SESSION['user_id'];
        $incoming_id = mysqli_real_escape_string($dbconn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($dbconn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($dbconn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }else{
        header("location: ../login.php");
    }


    
?>