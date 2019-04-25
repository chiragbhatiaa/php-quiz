<?php
session_start();
require("database.php");
include("header.php");
error_reporting(1);
?>
<?php

extract($_POST);


if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}



echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysql_query("select * from categories where category_name='$subname'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Category(Technology)  Already Exists</div>";
	exit;
}
mysql_query("insert into categories(category_name,time) values ('$subname','$cattime')",$cn) or die(mysql_error());
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<style>
.table1
{background-color:#0FF;
}
.table1 td{background-color:#0D66A5;
color:#000; font-size:16px; font: normal 150% 'century gothic', arial, sans-serif; font-weight:800;
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
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>
<div align="center">
<form name="form1" method="post" onSubmit="return check();">
  <table class="table1" width="400px" style="border:5px thick #000"  border="3"  align="center">
  <tr>
    <td>Enter Subject Name</td>
    <td> <input name="subname" placeholder="Enter Subject" type="text" id="subname" required></td>
  </tr>
  <tr>
    <td>Enter Time </td>
    <td> <input name="cattime" placeholder="Enter time in second" type="text" id="cattime" required></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input class="button" type="submit" name="submit" value="Add Subject" >
	</td>
  </tr>
</table>

</form>
</div>
<?php
include("footer.php")
?>
