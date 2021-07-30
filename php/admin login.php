<html>
<head>
<style>
body{
background-image:url("im1.jpg");
background-position:center;
background-size:cover;
}
</style>
</head>
<form method="POST">
<h1 style="position:absolute;top:130px;left:540px;font-family:'algerian';color:blue">LOGIN FORM FOR ADMIN</h1>
<h1 style="position:absolute;top:190px;color:green;left:500px">USER NAME</h1>
<input type="text" name="username" placeholder="enter your user name here"style="position:absolute;top:260px;left:500px;height:35px;width:400px;border-width:2px" required>
<h1 style="position:absolute;top:280px;color:green;left:500px">PASSWORD</h1>
<input type="password" name="pwd" placeholder="enter your password" style="border-width:2px;position:absolute;top:345px;left:500px;height:35px;width:400px">
<input type="submit" value="LOGIN" style="position:absolute;top:410px;left:500px;height:40px;width:400px;color:white;background-color:blue;font-size:20px;font-family:algerian" required>
</form>
<body>
</body>
</html>
<?php
include("conn.php");
$un=$_POST['username'];
$password=$_POST['pwd'];
if(empty($password) and empty($un))
{
	echo"<h3 style='color:red;position:absolute;left:500px;top:450px'><u>"."PLESAE ENTER USERNAME AND PASSWORD"."</u></h3>";
}
else
{
$query="select * from admin where username='$un' and password='$password';";
$q=mysqli_query($conn,$query);
$num=mysqli_num_rows($q);
if($num==1)
{
	header('location:admin.php');
}
else
{
	echo"<h3 style='color:red;position:absolute;left:500;top:450px'><u>"."PLEASE ENTER CORRECT USERNAME AND PASSWORD"."</u></h3>";
}
}
?>