<html>
<head> 
<style>
.home{
	border:1px solid black;
	height:280px;
	width:300px;
	border-radius:10px;
	background-color:pink;
}
.tet
{
	border:0px solid black;
	font-size:20px;
	color:black;
	padding-top:10px;
}
.header{
	border:0px solid green;
	font-size:30px;
	color:red;
	text-align:center;
}
.
{
	border:0px solid ;
	border-radius:10px;
	font-size:15px;
	padding-r:px;
	margin-top:30px;
	background-color:red;
	color:white;
}

</style>
 </head>
<body>
<div class="home">
<div class="header">     <div class="name" style="font-weight:bold;">Registration Form</div>
<div class="form">
<form action="exc.php" method="POST">
<table>
<tr> <td class="tet"> Name</td> <td><input name="Name" required="fill name"type="text" placeholder="Enter the name "></td></tr>
<tr> <td class="tet">Mobile </td> <td><input name="Mobile"required="fill mobilenum" type="Number" placeholder="Enter the Number"></td> </tr>
<tr> <td class="tet"> Email</td> <td><input name="Email" type="Email"required="fill emailid" placeholder="Enter the Emailid@ "></td> </tr>
<tr> <td class="tet"> Password </td> <td><input name="Password"required="fill password"type="Password" placeholder="Enter password"></td></tr>
<div>
</table>
<tr><td>  <input type="submit"  name="submit" value="submit"></input></td> </tr>
</div>
</form>
</div>
</div>
</body
</html>


<?php

$x=$_POST['Name'];
$y=$_POST['Mobile'];
$z=$_POST['Email'];
$w=$_POST['Password'];
include("database.php");
$db=mysql_select_db("rich");
$query="insert into login(Name,Mobile,Email,password)values('$x','$y','$z','$w')";
$v=mysql_query($query);	
if(isset($_POST['submit']))
{
	
  if(empty($_POST['Name']))
{
	$a="please fill name";
}
if(empty($_POST['Mobile']))
{
	$b="please fill Mobilenum";
}
if(empty($_POST['Email']))
{
	$c="please fill Email";
}

if(empty($_POST['Password']))
{
	$d="please fill Password";
}
if($v)
{
	echo "login success";

}
}
?>