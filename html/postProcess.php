<?php


if (isset($_POST['submit'])){
    $dbconn = require __DIR__ . "/db.php";
    $newPostSql = "INSERT INTO posts(post_content) VALUES (?)";

    $stmt = $dbconn->stmt_init();
    $stmt->prepare($newPostSql);
    $stmt->bind_param("s",
                    $_POST["post_content"]
                    );

                    try{
                        if ($stmt->execute()) {
                      
                            header("Location: index.php");
                            exit;
                                       }
                                    
                    }catch(Exception $err) {}
                };