<?php
$mismatch = FALSE;
$notpass = FALSE;
$notmail = FALSE;

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $defaultProfile = "default.jpg";
        
    



    $passwords = password_hash($_POST["passwords"], PASSWORD_DEFAULT);

    $dbconn = require __DIR__ . "/db.php";

    $sql = "INSERT INTO account_tb (name,username, email_address, password,profile_picture_name)
            VALUES (?, ?, ?,?,?)";
            
    $stmt = $dbconn->stmt_init();

    if ( ! $stmt->prepare($sql)) {
        die("SQL error: " . $dbconn->error);
    }

    $stmt->bind_param("sssss",
                    $_POST["name"],
                    $_POST["username"],
                    $_POST["email"],
                    $passwords,
                    $defaultProfile);
                    

        if ($stmt->execute()) {
            header("location: login.php");
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
        
        <form class="form" method="post" id="sign-up" enctype="multipart/form-data">

            <div class="signup">
                <div class="form-group">
                    <input type="text" id ="name" name="name" placeholder="Full name" required>
                </div>

                <div class="form-group">
                    <input type="text" id ="username" name="username" placeholder="Username" required>
                </div>
                
                <div class="form-group">

                        <?php if ($notmail):?>
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