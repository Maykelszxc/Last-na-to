<?php


$no_credential = FALSE;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $dbconn = require __DIR__ . "/db.php";
    
    $sql = sprintf("SELECT * FROM account_tb
                    WHERE email_address = '%s'",
                   $dbconn->real_escape_string($_POST["email-login"]));
    
    $result = $dbconn->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password-login"], $user["password"])) {
            
            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["user_id"];
            header("Location: index.php");
            exit;

            


        
        }
        
        
    
    } $no_credential = TRUE;


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">

    <title>Pet Book</title>
    <style>
    body{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url("../img/Background/petbookblur.jpg");
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    min-height: 100vh;
    z-index: -1;
        }
        
        </style>
</head>
<body>

    <div class="wrapper">
        <div class="headline">
            <h1 style = "color: BLACK">Pet Book</h1>
        </div>
        


        <form class="form" method = "post">
            
            <div class="signup">
                <div class="form-group">
                <?php if ($no_credential): ?> 
                    <em style = "color: white">No Matching Credentials</em> 
                        <?php endif;?>
                    <input type="email" id="email-login" name="email-login" placeholder="Email" required>
                </div>
                
                <div class="form-group">
                    <input type="password" id="password-login" name="password-login" placeholder="Password" required>
                </div>
                
                <div class="forget-password">
                    
                    <div class="check-box">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox" style = "color: BLACK" >Remember me</label>
                    </div>
                    
                    <a href="#">Forget Password?</a>
                </div>
                
                <button type="submit" class="btn">Login</button>

                <div class="account-exist" style = "color: BLACK">Create new account? <a href="signup.php" id="signup">Sign Up</a>
                </div>
            </div>
        </form>
    </div>
 
    

    
</body>
</html>