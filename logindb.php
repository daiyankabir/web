<?php
if(isset($_POST['login']))
{
	$con=mysqli_connect("localhost","root","","DB");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}
	//Retrieve Data

	$password=$_POST['password'];
	$email=$_POST['email'];
	$sql="SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result)>0)
	{
		header("Location:home.php");
	}
	else
	{
		
		header("Location:login.php");
		echo "No data found.<br/>";
	}

	
mysqli_close($con);		
}


?>