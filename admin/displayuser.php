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

<div align="center" >
<table class="table1" width="726" border="1"  bgcolor="#CCCCCC">
<tr bgcolor="#99FFFF" height="30px">
	<td class="button" colspan="8"><a href="useradd.php">Add New User</a></td>
</tr>
<tr height="30px" style="background-color:gray">
	<th width="27" >Id</th>
	<th width="131" >Name</th>
	<th width="34" >Email</th>
	<th width="65" >Password</th>
	<th width="65" >Picture</th>
	<th width="65" >Created Date</th>
	<th >Update/Delete</th>
</tr>

<?php 
$rs=mysql_query("select * from users");
while($r=mysql_fetch_array($rs))
{
$id=$r[0];
echo "<tr height='28px' bgcolor='#f8f8f8'>";
echo "<td>".$r[0]."</tD>";
echo "<td width='200px'>".$r[1]."</tD>";
echo "<td>".$r[2]."</tD>";
echo "<td>".$r[3]."</tD>";
echo "<td>".$r[5]."</tD>";
echo "<td>".$r[6]."</tD>";
echo "<td>
<a href='deleteuser.php?id=$id'>Delete</a>&nbsp;
<a href='updatequestion.php?id=$id'>Update</a>
</td>";
echo "</tr>";
}
?>
</table>
</div>
<?php
include("footer.php")
?>
