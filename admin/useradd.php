<?php
session_start();
require("database.php");
include("header.php");
error_reporting(1);
?>

<?php
extract($_POST);

if (!isset($_SESSION[alogin]))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}

if($submit)
{
mysql_query("insert into users values('','$n','$e','$p','','$f',now(),'$uuid')");

//mysql_query("insert into questions values ('','$addque','$ans1','$ans2','$ans3','$ans4',,'','','$anstrue','$testid')");

echo "<p style='color:blue' align=center>User Added Successfully.</p>";
unset($_POST);
}
?>
<style>
.table1
{background-color:#0FF;
}
.table1 td{background-color:#0D66A5;
color:#000; font-size:12px; font: normal 150% 'century gothic', arial, sans-serif; font-weight:800;
}
.table1 a{
color:#FFF;
}
.button {
  display: inline-block;
  border-radius: 2px;
  background-color: #333;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 15px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 3px;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

</style>

<h1 align="center" style="color:#666">Welcome To Online Quiz System</h1>
<p style="color:#060">&nbsp;</p>
<p>&nbsp;</p>

<div align="center">
<form name="form1" method="post" onSubmit="return check();">
  <table class="table1"  border="0" align="center">
    <tr>
      <td width="24%" height="32">Name</td>
      
      <td width="75%" height="32">
	  <input name="n" placeholder="Name" type="text" id="ans1" size="85" maxlength="85" required>
	  </td>
	  </tr>
        
    <tr>
        <td height="26">Email</td>
      
	    <td><input type="email" name="e" cols="60" rows="4" id="addque"
		 placeholder="Email" required>
		 </textarea></td>
    </tr>
    <tr>
      <td height="26">Password</td>
      
      <td><input name="p" placeholder="Password" type="password" id="ans1" size="85" maxlength="85" required></td>
    </tr>
    <tr>
      <td height="26">Picture</td>
      
      <td><input type="file" name="f"></td>
    </tr>
    
   
    <tr>
      <td height="26">Enter user Id </td>
     
      <td><input  name="uuid" type="text" placeholder="user id" id="anstrue" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
	  <input class="button" type="submit" name="submit" value="Add User">
	  <input class="button" type="reset"  value="Reset">
	  </td>
    </tr>
  </table>
</form>
</div>
<?php
include("footer.php")
?>

