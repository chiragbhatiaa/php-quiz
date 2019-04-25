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
}.button {
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


<div>
<?php 
$q=mysql_query("select * from categories where id='{$_GET['id']}'");
$rr=mysql_fetch_array($q);
if($upd)
{
mysql_query("update categories set category_name='$cat',time='$cattime' where id='{$_GET['id']}'");
echo "<font color='blue'>Cateogry updated</font>";
}
?>
<div align="center">
<form method="post">
<table class="table1" width="588" border="2">
  <tr>
    <td width="170" >Old Category</td>
    <td width="400"><input type="text" name="cat" value="<?php echo $rr[1]; ?>"/></td>
  </tr>
  <tr>
    <td width="170" >Time(Second) </td>
    <td width="400"><input type="text" name="cattime" value="<?php echo $rr[2]; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input class="button" type="submit" value="Update Category" name="upd"/>
	</td>
  </tr>
</table>
</form>
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

