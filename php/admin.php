<html>
<head>
<style>
body{
background-image:url("im1.jpg");
background-position:center;
background-size:cover;
}
table{
	position:absolute;
	top:250;
	left:550;
}
</style>
</head>
<body>
<img src="white.jpg" style="height:6000px;width:500;position:absolute;top:20px;left:450px"></img>
<h1 style="position:absolute;top:120;left:520px;font-family:algerian;color:red;width:380px"><u>here is the list of all doners </u></h1></body></html>
<?php
include("conn.php");
$q1="select name,email,amount from donate;";
	$query1=mysqli_query($conn,$q1);
	echo"<center/><table border='1'><tr><th>name</th><th>email</th><th>amount</th></tr>";
	while($row=mysqli_fetch_array($query1))
{
	echo "<tr><td>".$row["name"]."</td> <br/><td>";
	echo $row["email"]." </td><br/><td>";
    echo $row["amount"]."</td></tr>";
}
echo"</table>";
?>

