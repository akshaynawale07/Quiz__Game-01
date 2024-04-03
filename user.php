<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php  if (isset($_SESSION['username'])) : ?>
		
    	<p class="wel">Welcome!  <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p class="log"> <a href="index.php?logout='1'"style="color: siyan;">logout</a> </p>
		<a class="name" href="quiz.php">LETS PLAY</a>
		

		
    <?php endif ?>

    
    </div>
    
</body>
</html>