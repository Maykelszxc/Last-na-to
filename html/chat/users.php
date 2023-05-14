<?php 
  session_start();
  include_once "../db.php";
  if(!isset($_SESSION['user_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($dbconn, "SELECT * FROM account_tb WHERE user_id = {$_SESSION['user_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="../../img/profile-images/<?php echo $row['profile_picture_name']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['name']?></span>

          </div>
        </div>
        <a href="../logout.php" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select a user to start a chat with</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
