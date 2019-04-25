<?php
session_start()
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Online Quiz</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style.css" title="style" />
  <link rel="stylesheet" type="text/css" href="login.css" title="style" />
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
          <li><a href="../index.php">Student portal</a></li>
        </ul>
      </div>
    </div>
    
<h1 align="center" style="color:#666">Welcome To Online Quiz System</h1>
<p style="color:#060">&nbsp;</p>
<p>&nbsp;</p>
<div align="center" class="login-wrap">
	<div align="center" class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
		<label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
                <form id="form1" name="form1" method="post" action="login.php">
					<label for="user" class="label">Email Address</label>
				  <input  name="loginid" type="text" id="loginid" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="pass"  id="pass" type="password" class="input" required>
                 
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
				</div>
			</div>
				</div>
			</div>
		</div>
	</div>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</body>
</html>
<?php
include("footer.php")
?>
