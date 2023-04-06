<?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["passwords"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["passwords"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["passwords"])) {
    die("Password must contain at least one number");
}


$passwords = password_hash($_POST["passwords"], PASSWORD_DEFAULT);

$dbconn = require __DIR__ . "/db.php";

$sql = "INSERT INTO account_tb (name, email_address, password)
        VALUES (?, ?, ?)";
        
$stmt = $dbconn->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $dbconn->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $passwords);
                  
if ($stmt->execute()) {

    header("Location: login.html");
    exit;
    
} else {
    
    if ($dbconn->errno === 1062) {
        die("email already taken");
    } else {
        die($dbconn->error . " " . $dbconn->errno);
    }
}