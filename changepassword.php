<?php
	session_start();
	$error="";
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <head>
  <meta charset="UTF-8">
  <title>XCOMPANY</title>
    <link rel="stylesheet" type="text/css" href="style2.css">

</head>
</head>
<body>
  <div class="header_area">
    <div class="logoarea">
      <h1><span class="x">X</span>Company</h1>
    </div>
    <div class="menu_area">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="home.php">Logout</a></li>
      </ul>
    </div>
  </div>
  <div class="content_area">
    <div class="content_left">
      <h3>Account</h3>
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profile.php">View Profile</a></li>
        <li><a href="editprofile.php">Edit Profile</a></li>
        <li><a href="changepicture.php">Change Profile Picture</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
      </ul>
    </div>
<div class="content_right">
			<h3>Change Password</h3>
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "DB";
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT id, name, username, email,password FROM user WHERE username='".$_SESSION["username"]."'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					
					while($row = $result->fetch_assoc()) {
						$eid=$row["id"];
						$ename=$row["name"];
						$eemail=$row["email"];
						$uuname=$row["username"];
						$epass=$row["password"];
					}
					
				} else {
					echo "0 results";
				}

				$conn->close();
				
				
			 ?>
			 <?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if($epass==$_POST["oldpass"]){
				if($_POST["newpass"]==$_POST["renewpass"]){
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "DB";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					$sql="UPDATE user SET password='".$_POST["newpass"]."' WHERE username='".$_SESSION["username"]."'";
					//$sql = "INSERT INTO products (product_name, description, quantity)
					//VALUES ('".$_POST["pname"]."', '".$_POST["description"]."', '".$_POST["quantity"]."')";

					if ($conn->query($sql) === TRUE) {
						echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
					header("Location:profile.php");	
				}
				else{
					$error="Password don't match";
				}
			}
			else{
				$error="Incorrect Password";
			}
					
			
			//header("Location:profile.php");	
		}
		
		
	?>
		<form method="post">
		<table>
			<tr>
				<td><b>Current password :</b></td>
				<td><input type="text" name="oldpass" /></td>
				
			</tr>
			<tr>
				<td><b>New password :</b></td>
				<td><input type="text" name="newpass"/></td>
				
			</tr>
			
			<tr>
				<td><b>Retype New Password :</b></td>
				<td><input type="text" name="renewpass"/></td>
				
			</tr>
			
			
			
			
			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
			</tr>
			
		</table>
		
			
		
	</form>
		<?php echo $error; ?>	
		</div>
	</div>
	<div class="footer_area">
		<h3>ziad</h3>
	</div>
	
</body>
</html>