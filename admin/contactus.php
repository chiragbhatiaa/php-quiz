<?php
session_start();
error_reporting(1);
?>
<?php
include("header.php");
if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>
<h1 align="center" style="font-size:36px" style="color:#666">Feel free to contact us</h1>
<p style="color:#060">&nbsp;</p>
<p>&nbsp;</p>
<p align="center" style="font-size:20px">We are here to answer any questions you may have about our Online Quiz System experiences.Reach out of us and we'll respond as soon as we can.</p>
<p>&nbsp;</p>
<p align="center" style="font-size:20px">Even if there is something you have always wanted to experience and can't find it on quiz system.Let us know and we promise we'll do our best to find it for you and send you there.</p>

<?php
include("footer.php")
?>                            