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
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <title>Test</title>

</head>

<body>

    <!--NAV BAR-->

    <nav>
        <div class="container">
            <a href="index.html">
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
                        <h4>Andy Deschamps</h4>
                        <p class="text-muted">
                            @Andy
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
                <form class="create-post">
                    <div class="create-post-input">
                        <img src="../img/profile-images/<?=$dp?>">
                        <textarea rows="2" placeholder="Post your pets..."></textarea>
                    </div>
                    
                    <div class="create-post-links">
                        <li><i class="uil uil-camera"></i>Photo</li>
                        <li><i class="uil uil-video"></i>Video</li>
                        <li><i class="uil uil-file-upload-alt"></i>Documents</li>
                        <li class="btn btn-primary">Post</li>
                    </div>
                    
                </form>

                <!--NEWS FEEDS-->
                
                <div class="feeds">
                    <div class="feed">

                        <div class="head">

                            <div class="user">

                                <div class="profile-picture">

                                    <img src="../img/Developers/Developer Pyro.png">

                                </div>

                                <div class="ingo">

                                    <h3>Pyro Bansuelo</h3>

                                    <small>Manila, 12 MINUTES AGO</small>

                                </div>

                            </div>

                            <span class="edit">
                                    
                                <i class="uil uil-ellipsis-h"></i>

                            </span>

                        </div>

                        <div class="photo">

                            <img src="../img/IMG_8343.png">

                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>

                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">

                            <span><img src="../img/Developers/Developer AJ.png"></span>
                            <span><img src="../img/Developers/Developer Calvin.png"></span>
                            <span><img src="../img/Developers/Developer Mayks.png"></span>

                            <p>Liked by <b>Calvin De Luna</b> and 3 others</p> 
                        </div>

                        <div class="captions">
                            <p><b>Pyro Bansuelo</b> Please adopt this cats <span class="hash-tag">#PetAdoption</span></p>
                        </div>

                        <div class="comments text-muted">View all 3 comments</div>

                    </div>

                    <div class="feed">

                        <div class="head">

                            <div class="user">

                                <div class="profile-picture">

                                    <img src=".././img/Developers/Developer AJ.png">

                                </div>

                                <div class="ingo">

                                    <h3>Anette Babatio</h3>

                                    <small>Technological Institute of the Philippines, 1 HOUR AGO</small>

                                </div>

                            </div>

                            <span class="edit">
                                    
                                <i class="uil uil-ellipsis-h"></i>

                            </span>

                        </div>

                        <div class="photo">

                            <img src="../img/IMG_8362.png">

                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>

                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">

                            <span><img src="../img/Developers/Developer AJ.png"></span>
                            <span><img src="../img/Developers/Developer Calvin.png"></span>
                            <span><img src="../img/Developers/Developer Mayks.png"></span>

                            <p>Liked by <b>Pyro Bansuelo</b> and 3 others</p> 
                        </div>

                        <div class="captions">
                            <p><b>Anette Babatio</b> Poor cat near in TIP Manila <span class="hash-tag">#Arlegui</span></p>
                        </div>

                        <div class="comments text-muted">View all 3 comments</div>

                    </div>

                    <div class="feed">

                        <div class="head">

                            <div class="user">

                                <div class="profile-picture">

                                    <img src="../img/Developers/Developer Calvin.png">

                                </div>

                                <div class="ingo">

                                    <h3>Calvin De Luna</h3>

                                    <small>Mall of Asia Seaside, 12 DAYS AGO</small>

                                </div>

                            </div>

                            <span class="edit">
                                    
                                <i class="uil uil-ellipsis-h"></i>

                            </span>

                        </div>

                        <div class="photo">

                            <img src="../img/IMG_9895.png">

                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>

                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">

                            <span><img src="../img/Developers/Developer AJ.png"></span>
                            <span><img src="../img/Developers/Developer Calvin.png"></span>
                            <span><img src="../img/Developers/Developer Mayks.png"></span>

                            <p>Liked by <b>Anette Babatio</b> and 3 others</p> 
                        </div>

                        <div class="captions">
                            <p><b>Calvin De Luna</b> Cute cat in seaside please adopt <span class="hash-tag">#SeaSide</span></p>
                        </div>

                        <div class="comments text-muted">View all 3 comments</div>

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