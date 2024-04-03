<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quiz-final.css">
  
    <title>Quiz-Page</title>
    
</head>
<body>
    <!--QUIZ-QUESTION-->

    <div class="wrapper">
        <div class="quiz">
            <div class="quiz_header">
                <div class="quiz_user">
                
                <?php 
                session_start(); 
                if (isset($_SESSION['username'])) : ?> Welcome!... <strong><?php echo $_SESSION['username']; ?></strong></p>
       <a href="finall.php"></a> 
        <?php endif ?>
                </div>
            </div>

            <div class="quiz_body">
                <div id="questions">

              <!-- <ul class="option_group">
              <li class="option">option 1</li>
              <li class="option">option 2</li>
              <li class="option">option 3</li>
              <li class="option">option 4</li>
              </ul> -->
                </div>

                <button class="btn-next" onclick="next()">Next Question</button>
                

            </div>
        </div>
    </div>
    

    <script src="quiz.js"></script>
    <script src="userinfo.js"></script>
</body>
</html>