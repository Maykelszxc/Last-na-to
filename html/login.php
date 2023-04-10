<?php



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $dbconn = require __DIR__ . "/db.php";
    
    $sql = sprintf("SELECT * FROM account_tb
                    WHERE Email_address = '%s'",
                   $dbconn->real_escape_string($_POST["email-login"]));
    
    $result = $dbconn->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password-login"], $user["password"])) {
            
            session_start();
            $_SESSION["user_id"] = $user["username"];
            header("Location: homepage.html");

            


        
        }
        
        
    
    } 


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
</head>
<body>

    <div class="wrapper">
        <div class="headline">
            <h1>Pet Book</h1>
        </div>
        


        <form class="form" method = "post">
            
            <div class="signup">
                <div class="form-group">
                    <input type="email" id="email-login" name="email-login" placeholder="Email" required>
                </div>
                
                <div class="form-group">
                    <input type="password" id="password-login" name="password-login" placeholder="Password" required>
                </div>
                
                <div class="forget-password">
                    
                    <div class="check-box">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Remember me</label>
                    </div>
                    
                    <a href="#">Forget Password?</a>
                </div>
                
                <button type="submit" class="btn">Login</button>

                <div class="account-exist">Create new account? <a href="signup.html" id="signup">Sign Up</a>
                </div>
            </div>
        </form>
    </div>
    

    
</body>
</html>