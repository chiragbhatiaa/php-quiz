<?php
session_start();
error_reporting(1);
?>

<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("database.php");
	$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<BR><BR><p align=center style=color:red> Invalid User Name or Password</p>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>
<style type="text/css">
.page div div div .style7 a {
	font-family:Georgia, "Times New Roman", Times, serif;
	color:#00C;
	background:#69C;
	
}
</style>

<h1 align="center" style="color:#666">Welcome To Online Quiz System</h1>
<p style="color:#060">&nbsp;</p>
<p>&nbsp;</p>
        <div align="center" class="section_w940">
    
        <div class="box margin_r_20 box_border">

            <h2><a href="displaycategory.php">Edit Subjects</a></h2>

            <p>Manage subjects and Time of Quiz.</p>
         
                
        </div>
        
        <div class="box margin_r_20 box_border">

            <h2><a href="displayquestion.php">Edit Questions </a></h2>

            <p>Add Questions and their Answers into their respective Subjects.</p>
            
        </div>
        
        <div class="box">
            <h2><a href="displayuser.php">Edit Student</a></h2>

            <p>Admin can Manage and can see Students Details.</p>
            
 
        </div>
    
    	<div class="cleaner"></div>
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
<?php
include("footer.php")
?>


   
    
