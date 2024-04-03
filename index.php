<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="loginpage.css">
</head>
<body>

<div class="header">
	
</div>
		
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->

    <?php  if (isset($_SESSION['username'])) : ?>
		
    	<h1 class="wel">Welcome!  <strong><?php echo $_SESSION['username']; ?></strong></h1>
    	<p class="log"> <a href="index.php?logout='1'"style="color: siyan;">logout</a> </p>
		<a class="name" href="quiz.php">LETS PLAY</a>
		

		
    <?php endif ?>
</div>

</body>
</html>