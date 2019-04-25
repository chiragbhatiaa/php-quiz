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
<div align="center">
<table class="table1" width="600px"  border="3">

<tr>
	<Th>Id</Th>
	<th>Category</th>
	<th>Update/Delete</th>
</tr>

<?php 
$rs=mysql_query("select * from categories");
while($r=mysql_fetch_array($rs))
{
$id=$r[0];
echo "<tr height='28px' bgcolor='#66CCFF'>";
echo "<td>".$r[0]."</tD>";
echo "<td>".$r[1]."</tD>";
echo "<td><a href='deletecategory.php?id=$id'>Delete</a>&nbsp;&nbsp;
<a href='updatecategory.php?id=$id'>Update</a>
</td>";
echo "<tr>";
}
?>
<tr height="30px">
	<td class="button" colspan="3"><a href="subadd.php">Add Subject</a></td>
</tr>
</table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p>
</div>
<?php
include("footer.php")
?>
