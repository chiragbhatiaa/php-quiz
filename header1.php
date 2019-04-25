<?php 
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
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
      <title>PHP Quiz Script</title>
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
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
    <script src="js/jquery.validate.min.js"></script>
</head>
<style>

.dropdown {
	 letter-spacing: 0.1em;
  font: normal 100% arial, sans-serif;
  display: block; 
  float: left; 
  height: 37px;
  padding: 29px 26px 6px 26px;
  text-align: center;
  color: #FFF;
  text-transform: uppercase;
 
}

.dropdown-content {
	color:#FFF;
	font: normal 95% arial, sans-serif;
  display: none;
  position: absolute;
  background-color: #06C;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   padding: 29px 26px 6px 26px;
  
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
  color:#FFF;
}
</style>

<body>
  <div id="main">
    <div id="header" >
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          	<?php 
			$arr = explode("/",$_SERVER['REQUEST_URI']);
			$uri = end( $arr ); 
			?>
          <h1><a href="home">Online<span class="logo_colour">Quiz</span></a></h1>
          <h2>Simple. User Friendly. Quiz Portal.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li <?php if($uri == 'home') echo "class='active'"; ?>><a href="home">Home</a></li>
					<li <?php if($uri == 'quiz-results') echo "class='active'"; ?>><a href="quiz-results">Quiz Results</a></li>
		  <li <?php if($uri == 'start-quiz') ?>><a href="start-quiz">Start New Quiz</a></li>
					<div class="dropdown">
						<a style="color:#FFF" href="#" data-toggle="dropdown" class="dropdown-toggle">
							Welcome 
							
						<?php if($_SESSION['logged_in']) { ?>
							<?php echo $_SESSION['name']; ?>
						</a>
                        
                                               
                        
						 <div class="dropdown-content">
							<p> <a style="color:#FFF" href="account.php">My Account&nbsp;</a> </p>
							<li class="divider"></li>
							<p> <a style="color:#FFF" href="logout.php">Logout&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </p>
		</ul>
						<?php } ?>
					</li>
					
				</ul>
      </div>
 </div>
</div>  
