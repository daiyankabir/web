<?php
session_start();
?>


<?php
if(isset($_POST['login']))
{   $_SESSION["username"] = $_POST["username"];


	$con=mysqli_connect("localhost","root","","DB");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}
	//Retrieve Data

	$password=$_POST['password'];
	$username=$_POST['username'];

	$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result)>0)
	{     
	        	
			
			header("Location:dashboard.php");

	
	}
	else
	{
		
		echo "No data found.<br/>";
	}

	
mysqli_close($con);		
}


?>






<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
 
  <div class="header">
  
  	<h2>X Company</h2>
  	<label><a href="home.php">Home</a> <a href="login.php">Login</a> <a href="input.php">Registration</a></label>
  </div>
	
  <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  	 	
    <div class="input-group">
 <fieldset>
	  <legend><h3>Login</h3>	</legend>
      <label>User name</label>
     <input type="text" name="username">
    
  	  <label>Password</label>
  	  <input type="password" name="password">
	  <br><br>
  	</div>
	<br>
</fieldset> 
  	<td><input type="submit" name="login" value="Login"/></td>
 
  </form>
</body>
</html>


