<?php 
ob_start();
session_start();
require_once 'config.php'; 
?>
<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				$_SESSION['success'] = 'You are logged in successfully';
				header('Location: home.php');exit;
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
			$_SESSION['error'] = $error;
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: home.php');exit;
	}
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Online Quiz</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="admin/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header" >
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="#">Online<span class="logo_colour">Quiz</span></a></h1>
          <h2>Simple. User Friendly. Quiz Portal.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="login.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="admin/index.php">Admin login</a></li>
       
        </ul>
      </div>
    </div>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="php quiz script, php quiz code, php quiz application, quiz php code, php quiz system, online quiz using php, quiz using php, how to make quiz in php, quiz system in php, php programming quiz, online quiz using php and mysql, create online quiz using php and mysql, create quiz using php mysql, php quiz script free">
    <meta name="keywords" content="php quiz script, php quiz code, php quiz application, quiz php code, php quiz system, online quiz using php, quiz using php, how to make quiz in php, quiz system in php, php programming quiz, online quiz using php and mysql, create online quiz using php and mysql, create quiz using php mysql, php quiz script free">
	<meta name="author" content="https://plus.google.com/+MuniAyothi/">
    <title>PHP Quiz Script</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="admin/login.css" rel="stylesheet">
<script type="text/javascript" src="admin/bootstrap-4.1.1/dist/js/bootstrap.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>

		<?php require_once 'templates/ads.php';?>
		<div class="login-form">
			<?php require_once 'templates/message.php';?>
			<h1 class="text-center">ONLINE QUIZ SYSTEM</h1>
            
            
  
<div align="center" class="login-wrap">
	<div align="center"  class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
		<label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
        
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
                <form id="form1" name="form1" method="post" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<label for="user" class="label">Email Address</label>
				  <input  name="email" type="text" id="email" class="input" required placeholder="Email address" autofocus>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="password"  id="password" type="password" class="input" required placeholder="Password">
                 
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group" >
					<input name="submit" id="submit" type="submit" class="button" value="Login"  >
                    </form>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
                    <p>NEW USER?</p>
                    <a style="color:#FFF; font-size:14px" href="register">Register here</a>
				</div>
			</div>
		</div>
	</div>
</div>			
            
            
            
	

	<!-- /container -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>
<?php unset($_SESSION['success'] ); unset($_SESSION['error']);  ?>    
<?php
include("footer.php")
?>