<?php

$host = 'localhost';
$dbname = 'petbook_db';
$username = 'root';
$password = '';

$dbconn = new mysqli(hostname: $host, 
                     username:$username,
                     password: $password, 
                     database: $dbname);

if ($dbconn->connect_errno) {
    die("Failed to connect: " . $dbconn->connect_error);

}
return $dbconn;