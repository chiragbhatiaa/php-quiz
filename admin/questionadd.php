<?php
session_start();
require("database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
extract($_POST);

if (!isset($_SESSION[alogin]))
{
	echo "<br><h2><div  class=head1>You are not Logged On Please Login to Access this Page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}

if($_POST[submit]=='Save' || strlen($_POST['testid'])>0 )
{
extract($_POST);

mysql_query("insert into questions values('','$addque','$ans1','$ans2','$ans3','$ans4','','','$anstrue','$testid')");

//mysql_query("insert into questions values ('','$addque','$ans1','$ans2','$ans3','$ans4',,'','','$anstrue','$testid')");

echo "<p align=center>Question Added Successfully.</p>";
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

<SCRIPT LANGUAGE="JavaScript">
/*function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
return false;
}
return true;
}*/
</script>
<h1 align="center" style="color:#666">Welcome To Online Quiz System</h1>
<p style="color:#060">&nbsp;</p>
<p>&nbsp;</p>

<div align="center">
<form name="form1" method="post" onSubmit="return check();">
  <table class="table1"  border="0" align="center">
    <tr>
      <td width="24%" height="32">Select Subject</td>
      
      <td width="75%" height="32">
<select name="testid" id="testid" >
<option value="" selected="selected" disabled="disabled">Choose Subject</option>
<?php
$rs=mysql_query("Select * from categories order by category_name",$cn);
while($row=mysql_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select></td>
	  </tr>
        
    <tr>
        <td height="26">Enter Question</td>
      
	    <td><textarea name="addque" cols="60" rows="4" id="addque"
		 placeholder="Enter your Question">
		 </textarea></td>
    </tr>
    <tr>
      <td height="26">Enter Answer1</td>
      
      <td><input name="ans1" placeholder="Answer 1" type="text" id="ans1" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26">Enter Answer2 </td>
      
      <td><input name="ans2" type="text" placeholder="Answer 2" id="ans2" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26">Enter Answer3</td>
      
      <td><input name="ans3" type="text" placeholder="Answer 3" id="ans3" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26">Enter Answer4</td>
     
      <td><input name="ans4" type="text" placeholder="Answer 4" id="ans4" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26">Enter True Answer </td>
     
      <td><input name="anstrue" type="text" placeholder="True Answer" id="anstrue" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
	  <input class="button" type="submit" name="submit" value="Add Question">
	  <input class="button" type="reset"  value="Reset Question">
	  </td>
    </tr>
  </table>
</form>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p><p>&nbsp;</p>
<p>&nbsp;</p>
</div>
<?php
include("footer.php")
?> 
 