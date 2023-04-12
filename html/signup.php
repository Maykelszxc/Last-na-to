<?php
$mismatch = FALSE;
$notpass = FALSE;
$notmail = FALSE;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])) {
        echo ("Name is required");
    }

    if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        die("Invalid Email");

    }

    if (strlen($_POST["passwords"]) < 8) {
        die("Password length must have at least 8 characters");
 

    }

    if ( ! preg_match("/[a-z]/i", $_POST["passwords"])) {
        die("Password must have at least 1 letter");


    }

    if ( ! preg_match("/[0-9]/", $_POST["passwords"])) {
        die("Password must have at least 1 number");


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
                    
    try{
        if ($stmt->execute()) {
                    
            header("Location: login.php");
            exit;
                       }
                    
    }catch(Exception $err) {
           
            $notmail = true;
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
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="../js/validation.js" defer></script>

    <title>Pet Book</title>
</head>
<body>
    <div class="wrapper">
        <div class="headline">
            <h1>Pet Book</h1>
        </div>
        
        <form class="form" method="post" id="sign-up">

            <div class="signup">
                <div class="form-group">
                    <input type="text" id ="name" name="name" placeholder="Full name" required>
                </div>
                
                <div class="form-group">
                    <?php if ($mismatch): ?> 
                        <em>Please enter a valid email</em> 
                        <?php elseif ($notmail):?>
                            <em style = "color: RED">Email already taken </em>
                                <?php endif;?>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                
                <div class="form-group">
                    <?php if ($notpass): ?> 
                        <em>Password must be at least 8 characters and have 1 letter and number</em> 
                        <?php endif; ?>
                    <input type="password" id="passwords" name="passwords" placeholder="Password" required>
                </div>
                
                <button type="submit" class="btn">Sign Up</button>

                <div class="account-exist">Already have an account? <a href="login.php" id="login">Login</a>
                </div>
            </div>
        </form>
    </body>
</html>