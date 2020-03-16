<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="header">
  	<h2>Register</h2>
  	<label><a href="home.php">Home</a> <a href="login.php">Login</a> <a href="input.php">Registration</a></label>
    </div>


	<?php
		$name=$email=$date=$exam=$gender=$bloodGroup="";
		$nameErr = $emailErr = $dateErr=$examErr= $genderErr=$bgErr= $monthErr = $yearErr = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])){
				$nameErr = "Please Enter Your Name";
			} 
			else {
				$name = $_POST["name"];
			}
			if (empty($_POST["email"])){
				$emailErr = "Invalid email format";
			} 
			else {
				$email = $_POST["email"];
			}
			
			if (empty($_POST["date"])){
				$dateErr = "Please Enter Your Birth Date";
			} 
			else {
				$date = $_POST["date"];
			}
			
			
			if (empty($_POST["gender"])){
				$genderErr = "Please Enter Your Gender";
			} 
			else {
				$gender = $_POST["gender"];
			}
			
			
			
		}
	?>
	<form method="post" action="insertdb.php">
		
		
				Name :
				<input type="text" name="name"/>
				<span style="color:red;">* <?php echo $nameErr;?></span>
				<br><br>
			
			
				Email :
				<input type="email" name="email"/>
				<span style="color:red;">* <?php echo $emailErr;?></span>
                <br><br>

                User Name :
				<input type="text" name="username"/>
				<span style="color:red;">* <?php echo $nameErr;?></span>
                <br><br>			
                
                Password :
				<input type="password" name="password"/>
                <br><br>

                Conirm Password :
				<input type="password" name="cpassword"/>
                <br><br>


				Date of Birth :
				<input type="Date" name="date"/>
				<span style="color:red;">* <?php echo $dateErr;?></span>
			    <br><br> 
			
				Gender :
					<input type="radio" value="Male" name="gender"/>Male
					<input type="radio" value="Female" name="gender"/>Female
					<input type="radio" value="Other" name="gender"/>Others
				<span style="color:red;">* <?php echo $genderErr;?></span>
			     <br><br>
		
				
			    <br><br>
			
				
	
			
		
		
		<input type="submit" name="submit" value="Submit">  
</form>
	<br><br>




	
</body>
</html>