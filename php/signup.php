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
<h1 style="position:absolute;top:120px;left:520px;color:black;font-family:'algerian">DONATION FORM</h1>
<input type="text" name="name" placeholder="ENTER YOUR NAME" style="position:absolute;top:220px;left:500px;height:35px;width:215px" required>
<input type="text" name="address" placeholder="ENTER YOUR ADDRESS" style="position:absolute;top:220px;left:800px;height:35px;width:215px" required>
<input type="text" name="email" placeholder="ENTER YOUR EMAIL" style="position:absolute;top:290;left:500px;height:35px;width:215px" required>
<input type="text" name="phone" placeholder="ENTER YOUR NUMBER" style="position:absolute;top:290;left:800px;height:35px;width:215px">
<input type="text" name="amount" placeholder="ENTER PASSWORD" style="position:absolute;top:360;left:500px;height:35px;width:215px">
<input type="submit" value="donate" style="position:absolute;top:430;left:500px;height:35px;width:520px;color:white;background-color:blue;font-size:20px;font-family:'algerian'">
</form>
<body>
</body>
</html>
<?php
include("conn.php");
$na=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$amount=$_POST['amount'];
if(empty($na) or empty($email) or empty($address) or empty($amount))
{
	echo'<h3 style="position:absolute;top:460px;left:480px;color:red;font-family:algerian"><u><blink>'."please enter data required data with correct manner"."</blink></h3>";

}
else
{
	$query="insert into donate values('$na','$address','$email',$phone,$amount);";
$q=mysqli_query($conn,$query);
if($q)
{
	header('location:https://rzp.io/l/XQm6Xxsc');
	}
else{
	echo'not';
}
	}
?>