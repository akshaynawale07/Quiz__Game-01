<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quiz-final.css">
    <title>Award-Page</title>
</head>
<body>
    <!--AWARD & POINTS-->
    <div class="wrapper">
        <div class="border">
            <i class="fas fa-award award_icon" style="margin: 10px 0px 0px 130px; color: gold;"></i>
            <?php 
            session_start(); 
            if (isset($_SESSION['username'])) : ?> Welcome!... <strong><?php echo $_SESSION['username']; ?></strong></p>
   
    <?php endif ?>
            <h1 class="username"><span class="name" style="font-size: 50px; color: #b70909;"></span><br>WELL DONE !</h1>
        
            <p class="userpoints">Your Points <span class="points" style="color: rgb(247, 245, 250);"></span></p>
        </div>
    </div>



    <script src="https://kit.fontawesome.com/d56261bbb9.js"></script>

    <script src="userinfo.js"></script>
</body>
</html>