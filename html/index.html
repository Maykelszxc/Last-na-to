<?php

session_start();
$UID = $_SESSION["user_id"];

if (isset($_SESSION["user_id"])) {
    
    
    $dbconn = require __DIR__ . "/db.php";


    
    $sql = "SELECT * FROM account_tb
            WHERE user_id = $UID";
            
    $result = $dbconn->query($sql);
    
    $user = $result->fetch_assoc();
    $name = $user["name"];
    
    $dp = $user["profile_picture_name"];


        $posts_sql = "SELECT * FROM posts ORDER BY date_created DESC";
            
    $posts_result = $dbconn->query($posts_sql);



    


};


if ($_SERVER["REQUEST_METHOD"] == "POST"){
//for images
    $image_file = $_FILES['image'];
    $image_name = $image_file['name'];
    $image_data = ($image_file['tmp_name']);
    $extension = explode('.',$image_name);
    $fileActualExt = strtolower(end($extension));
    $newName = uniqid('', true).".".$fileActualExt;
    
    
    
    $folder='../img/post_images/';

//post the content to database

    $dbconn = require __DIR__ . "/db.php";
    $publicProfileSql = "SELECT * FROM account_tb WHERE user_id = $UID";
    $publicProfileSqlResult = $dbconn ->query($publicProfileSql);
    $publicProfile = $publicProfileSqlResult->fetch_assoc();
    $publicUser = $publicProfile["name"];
    $postProfile = $publicProfile["profile_picture_name"];
    $userhandle = $publicProfile["username"];
    $newPostSql = "INSERT INTO posts (user_id, public_name, public_profile_picture, post_content,post_image, handlebar) VALUES (?,?,?,?,?,?)";
    

    $stmt = $dbconn->stmt_init();
    $stmt->prepare($newPostSql);
    $stmt->bind_param("isssss",
                    $UID,
                    $publicUser,
                    $postProfile,
                    $_POST["post_content"],
                    $newName,
                    $userhandle
                    );


    if($stmt->execute()){
        move_uploaded_file($image_data,$folder.$newName);
        header("Location: index.php");
    };
                      

                };


if (! isset($user)){

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
    
    <link rel="shortcut icon" type="x-icon" href="Logo1.png">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    

    <title>PetBook</title>

</head>

<body>

    <!--NAV BAR-->

    <nav>
        <div class="container">
            <a href="index.html">
                <h2 class="logo">
                   PetBook
                </h2>
            </a>
            

            <div class="search-box">
                <i class="uil uil-search" ></i>
                <input type="search" placeholder="Search">
            </div>

            <div class="create">
                <label class="btn btn-primary" for="create-post">Create</label>

                <div class="profile-picture">
                    <a href = "profile.php"><img src="../img/profile-images/<?=$dp?>"></a>
                </div>

            </div>
        </div>
    </nav>

    <!--MAIN CONTENT-->

    <main>
        <div class="container">

            <!--LEFT CONTENT-->

            <div class="left">

                <a class="profile">
                    <div class="profile-picture">
                        <img src="../img/profile-images/<?=$dp?>">
                    </div>
                    <div class="handle">
                        <h4><?=$name?></h4>
                        <p class="text-muted">
                            @<?=$user["username"]?>
                        </p>
                    </div>
                </a>

                <!--LEFT SIDE BAR-->

                <div class="sidebar">

                    <a class="menu-item active">

                        <span><i class="uil uil-home"></i></span>
                        <h3>Home</h3>

                    </a>

                    <a class="menu-item" id="notifications">

                        <span><i class="uil uil-bell"><small class="notification-count">5+</small></i></span>
                        <h3>Notifications</h3>

                        <!--NOTIFICATION POPUP-->

                        <div class="notification-popup">
                            
                            <div>
                                <div class="profile-picture">
                                    <img src="../img/Developers/Developer Mayks.png">
                                </div>
    
                                <div class="notification-body">
                                    <b>Michael Jose</b> accepted your pet request
                                    <small class="text-muted"> 2 DAYS AGO</small>
                                </div>
                            </div>


                            <div>
                                <div class="profile-picture">
                                    <img src="../img/Developers/Developer Pyro.png">
                                </div>
    
                                <div class="notification-body">
                                    <b>Pyro Bansuelo</b> commented on your post
                                    <small class="text-muted"> 1 HOUR AGO</small>
                                </div>
                            </div>
                        
                            <div>
                                <div class="profile-picture">
                                    <img src="../img/Developers/Developer Calvin.png">
                                </div>
    
                                <div class="notification-body">
                                    <b>Calvin De Luna</b> liked your post
                                    <small class="text-muted"> 4 MINS AGO</small>
                                </div>
                            </div>

                            <div>
                                <div class="profile-picture">
                                    <img src="../img/Developers/Developer AJ.png">
                                </div>
    
                                <div class="notification-body">
                                    <b>Anette Babatio</b> accepted your pet request
                                    <small class="text-muted"> 5 SECONDS AGO</small>
                                </div>
                            </div>

                        </div>

                    </a>

                    <!--END OF NOTIFICATION POPUP-->

                    <a class="menu-item" id="messages-notifications">

                        <span><i class="uil uil-envelope-alt"><small class="notification-count">6</small></i></span>
                        <h3>Messages</h3>

                    </a>

                    <a class="menu-item" id="theme">

                        <span><i class="uil uil-palette"></i></i></span>
                        <h3>Theme</h3>
                    </a>

                    <a class="menu-item">

                        <span><i class="uil uil-setting"></i></span>
                        <h3>Settings</h3>

                    </a>

                    <a class="menu-item" href = "logout.php">

                        <span><i class="uil uil-signout"></i></span>
                        <h3>Logout</h3>

                    </a>

                </div>
                <!--END OF LEFT SIDEBAR-->

                <label for="create-post" class="btn btn-primary">Create Post</label>

            </div>



            <!--MIDDLE CONTENT-->

            <div class="middle">

                <!--CREATE POST-->
                <form class="create-post" method = "post" enctype = "multipart/form-data">
                    <div class="create-post-input">
                        <img src="../img/profile-images/<?=$dp?>">
                        <input type = "text" id ="post_content" name ="post_content" placeholder="Post your pets..." >
                    </div>
                    
                    <div class="create-post-links">
                        <input type="file" id="file" name="image" accept="image/*">
                        <label for="file"><i class="uil uil-camera"></i>Photos</label>

                        <input type="file" id="file" accept="video/*">
                        <label for="file"><i class="uil uil-video"></i>Videos</label>

                        <input type="file" id="file">
                        <label for="file"><i class="uil uil-file-upload-alt"></i>Documents</label>

                        <button class="btn btn-primary" type = "submit" id="submit">Post</li>
                    </div>
                    
                </form>

                <!--NEWS FEEDS-->
                
                <div class="feeds">
  
                <div class="feed">
                <?php while($user = $posts_result->fetch_assoc()):
                    $identifier = $user["public_name"];
                    $post_content = $user["post_content"];
                    $date_created = $user["date_created"];
                    $publicDP = $user["public_profile_picture"];
                    $post_image = $user["post_image"];
                    $handlebar = $user["handlebar"]?>      
                    
                        <div class="head">

                            <div class="user">

                                <div class="profile-picture">

                                    <img src="../img/profile-images/<?=$publicDP?>">

                                </div>

                                <div class="info">

                                    <h3><?=$identifier?></h3>
                                    <p class ="text-muted">@<?=$handlebar?></p>

                                    <small><?=$date_created?></small>

                                </div>

                            </div>

                            <span class="edit">
                                    
                                <i class="uil uil-ellipsis-h"></i>

                            </span>

                        </div>

                        <div class="photo">

                            <img src="../img/post_images/<?=$post_image?>">

                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>

                            <div class="home">
                                <span><i class="uil uil-house-user"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">

                            <span><img src="../img/Developers/Developer AJ.png"></span>
                            <span><img src="../img/Developers/Developer Calvin.png"></span>
                            <span><img src="../img/Developers/Developer Mayks.png"></span>

                            <p>Liked by <b>Calvin De Luna</b> and 3 others</p> 
                        </div>

                        <div class="captions">
                            <p><b><?=$identifier?></b><?=" ", $post_content?></p>
                        </div>

                        <div class="comments text-muted">View all 3 comments</div>
                        <div style="height: 10px; background-color: #EAEFF5; margin-bottom: 12px" ></div>

                        <?php endwhile;?>
                    </div>
</div>




                <!--END OF NEWS FEEDS-->

            </div>


            <!--END OF MIDDLE-->

            <!--RIGHT CONTENT-->

            <div class="right">

                <div class="messages">

                    <div class="heading">

                        <h4>Messages</h4><i class="uil uil-edit"></i>

                    </div>

                    <!--SEARCH BAR-->

                    <div class="search-box">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search Messages" id="message-search">
                    </div>

                    <!--MESSAGE CATEGORY-->

                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6>General</h6>
                        <h6 class="message-requests">Request(2)</h6>
                    </div>

                    <!--MESSAGE-->

                    <div class="message">

                        <div class="profile-picture">
                            <img src="../img/Developers/Developer Pyro.png">
                        </div>

                        <div class="message-body">
                            <h5>Pyro Bansuelo</h5>
                            <p class="text-muted">Pahingi ng pet foods</p>
                        </div>

                    </div>

                    <div class="message">

                        <div class="profile-picture">
                            <img src="../img/Developers/Developer Mayks.png">
                        </div>

                        <div class="message-body">
                            <h5>Michael Jose</h5>
                            <p class="text-bold">3 new messages</p>
                        </div>

                    </div>

                    <div class="message">

                        <div class="profile-picture">
                            <img src="../img/Developers/Developer AJ.png">
                            <div class="active"></div>
                        </div>

                        <div class="message-body">
                            <h5>Anette Babatio</h5>
                            <p class="text-bold">Edi waw!</p>
                        </div>

                    </div>

                    <!--END OF MESSAGE-->

                    
                </div>

                <!--FRIEND REQUESTS-->

                <div class="friend-requests">

                    <h4>Requests</h4>

                    <div class="request">

                        <div class="info">

                            <div class="profile-picture">

                                <img src="../img/Developers/Developer Mayks.png">

                            </div>

                            <div>

                                <h5>Michael Jose</h5>
                                <p class="text-muted">
                                    69 mutual friends
                                </p>

                                
                            </div>

                        </div>

                        <div class="action">

                            <button class="btn btn-primary">
                                Accept
                            </button>

                            <button class="btn">
                                Decline
                            </button>
                        </div>

                    </div>

                    <div class="request">

                        <div class="info">

                            <div class="profile-picture">

                                <img src="../img/Developers/Developer Calvin.png">

                            </div>

                            <div>

                                <h5>Calvin De Luna</h5>
                                <p class="text-muted">
                                    13 mutual friends
                                </p>

                                
                            </div>

                        </div>

                        <div class="action">

                            <button class="btn btn-primary">
                                Accept
                            </button>

                            <button class="btn">
                                Decline
                            </button>
                        </div>

                    </div>

                </div>

            </div>

            <!-- END OF FRIEND REQUESTS-->


            <!-- CUSTOMIZATION OF THEME-->

            <div class="customize-theme">

                <div class="card">

                    <h2>Customize your view</h2>
                    <p class="text-muted">Manage your font size, color, and background</p>

                    <!-- FONT SIZES-->

                    <div class="font-size">
                        <h4>Font Size</h4>

                        <div>
                            <h6>Aa</h6>

                            <div class="choose-size">
                                <span class="font-size-1"></span>
                                <span class="font-size-2 active"></span>
                                <span class="font-size-3"></span>
                                <span class="font-size-4"></span>
                                <span class="font-size-5"></span>
                            </div>

                            <h3>Aa</h3>

                        </div>
                    </div>

                    <!-- PRIMARY COLORS-->

                    <div class="color">
                        <h4>Color</h4>

                        <div class="choose-color">
                            <span class="color-1 active"></span>
                            <span class="color-2"></span>
                            <span class="color-3"></span>
                            <span class="color-4"></span>
                            <span class="color-5"></span>
                        </div>

                    </div>

                    <!-- BACKGROUND COLORS-->

                    <div class="background">
                        <h4>Background</h4>

                        <div class="choose-bg">
                            <div class="bg-1 active">
                                <span></span>
                                <h5 for="bg-1">Light</h5>
                            </div>

                            <div class="bg-2">
                                <span></span>
                                <h5 for="bg-2">Dim</h5>
                            </div>

                            <div class="bg-3">
                                <span></span>
                                <h5 for="bg-3">Lights Out</h5>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </main>




<script src="java.js"></script>

</body>
</html>