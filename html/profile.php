<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    
    $dbconn = require __DIR__ . "/db.php";

    $UID = $_SESSION["user_id"];
    
    $sql = "SELECT * FROM account_tb
            WHERE user_id = $UID";
            
    $result = $dbconn->query($sql);
    
    $user = $result->fetch_assoc();
    
    $dp = $user["profile_picture_name"];
    $name = $user["name"];

};

if(! isset($_SESSION["user_id"])){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../css/profile.css">


        <title>Profile page</title>
    </head>

    <body>
        
        <nav>
            <div class="container">
                <a href="index.php">
                    <h2 class="logo">
                        <img src="../img/logo-icons.png">
                    </h2>
                </a>
                
    
                <div class="search-box">
                    <i class="uil uil-search" ></i>
                    <input type="search" placeholder="Search">
                </div>
    
                <div class="create">
                    <label class="btn btn-primary" for="create-post">Create</label>
    
                    <div class="profile-picture">
                        <img src="../img/profile-images/<?=$dp?>">
                    </div>
    
                </div>
            </div>
        </nav>

<!-------nav bar close ------->
<div class="container">

    <div class="profile-main">

        <div class="profile-container">
            <img src="../img/cover_images/<?=$user["cover_photo"]?>" width="400" height="500">

            <div class="profile-container-inner">
                <img src="../img/profile-images/<?=($user["profile_picture_name"])?>" class="profile-pic">

                <h1><?=$name?></h1>
                <h3>Only account</h3>
                <p>See more about <?=$name?><a href="#"> Contact Info</a>            
                </p>

                <div class="mutual-connection">
                    <img src="../img/Developers/Developer Pyro.png">
                    <img src="../img/Developers/Developer AJ.png">
                    <img src="../img/Developers/Developer Calvin.png">
                    <img src="../img/Developers/Developer Mayks.png">
                    <span>4 mutual Friends</span>
                    


                </div>

                <div class="profile-btn">
                    <a href="#" class="primary-btn"><img src="../img/connect.png">Connect</a>
                    <a href="#"><img src="../img//message.png">Message</a>
                    <a href="update_profile.php" class="primary-btn"><img src="../img/dots.png">Edit Profile</a>

                </div>
            </div>
        </div>
    </div>

    <div class="profile-description">
        <h2>About</h2>
        <p>Pet adoption seeks to solve the issue of the large number of abandoned and put to death animals at animal shelters and rescue groups. </p>
        <a href="#" class="see-more-link">See more...</a>
    </div>

    <div class="profile-description">
        <h2>Experience</h2>

        <div class="profile-desc-row">
            <img src="../img/network.png">


            <div>
                <h3>System Analyst</h3>
                <b>Petbook Group</b>
                <b>2022-2023</b>
                <p>Despite the advantages of pet ownership, many people are still afraid to adopt, either because they don't understand the adoption procedure or because they have preconceived notions about animals in shelters.
                
                </p>

                <hr>
            </div>
        </div>


            <div class="profile-desc-row">
                <img src="../img/network.png">
                <div>
                    <h3>Full stack Developer</h3>
                    <b>Full-time</b>
                    <b>2023 - Present</b>
                    <p>Many people are still afraid to adopt, either because they don't understand the adoption procedure or because they have preconceived notions about animals in shelters.
                    </p>
                </div>
            </div>
            <hr>
            <a href="#" class="experience-link">Show all<img src="../img/down-arrow.png"></a>

    </div>

    <div class="profile-description">
        <h2>Education</h2>

        <div class="profile-desc-row">
            <img src="../img/Background/cat4k.jpg">
            
            <div>
                <h3>Tip Manila, Quiapo</h3>
                <b>BSCPE, Computer Engineering</b>
                <b>2021 - Present</b>

                <hr>
            </div>
        </div>

        <div class="profile-description">
            <h2>Skills</h2>
            <a href="#" class="skills-btn">Leadershiip</a>
            <a href="#" class="skills-btn">Front End Developer</a>
            <a href="#" class="skills-btn">Communication</a>
            <a href="#" class="skills-btn">Enterprenuorship</a>
        </div>

        <div class="profile-description">
            <h2>Language</h2>
            <a href="#" class="language-btn">English</a>
            <a href="#" class="language-btn">Filipino</a>
            

        </div>
    </div>
<!--------Profile-sidebar-------->
    <
</div>
 
script src="../js/homepage.js"></script>

    </body>
</html>