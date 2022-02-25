<?php
if(!isset($_SESSION)){
    session_start();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/navbar/nav.css">
</head>
<body>
    <nav id="navbar">
        
        <div class="nav_container"> 
            <!-- <a href=""><img src="../images/LOGO.png" alt="cine_master_logo"></a> -->
            <a href="">CINE MASTER</a>
        </div>
        <ul class="nav_links">
                <li class="iteam"><a href="http://localhost/cine_master/view/home.php">Home</a> </li>
                <li class="iteam"><a href="http://localhost/cine_master/view/posts.php">Posts</a> </li>
                <!-- <li class="iteam"><a href=""> Contact</a></li> -->
              
                <?php
                if(isset($_SESSION['username'])) :?>
                    <li class="iteam"><a href="http://localhost/cine_master/view/logout.php">Logout</a></li>
                    <?php   else :?>
                        
                        <li class="iteam"><a href="http://localhost/cine_master/view/login.php">Login</a></li>
                <?php endif ?>
               
        </ul>
        <div class="menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            
        </div>
    
    </nav>
    <script src="http://localhost/cine_master/js/nav.js"></script>
</body>
</html>