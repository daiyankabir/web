<?php
  session_start();

	$username=$_SESSION["username"];
	
	
	
  
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
			<h2>Welcome <?php echo $username; ?></h2>
			
		</div>
	</div>
	<div class="footer_area">
		<h3>ziad</h3>
	</div>
</body>
</html>