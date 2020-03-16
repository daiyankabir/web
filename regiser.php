<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>RegistrationL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2></h2>
  </div>
	
  <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  	<?php include('errors.php'); ?>
    <div class="input-group">
	<fieldset>
<legend><h3>Registration</h3></legend>
      <label>Name</label>
      <input type="text" name="name" >
   
  	  <label>Username</label>
  	  <input type="text" name="username" >
  
  	  <label>Email</label>
  	  <input type="email" name="email" >
  
  	  <label>Password</label>
  	  <input type="password" name="password">
  
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	
      <label>Gender:</label>
      <input type="radio" id="male" name="gender" value="$male">
      <label for="male">Male</label><br>
      <input type="radio" id="female" name="gender" value="$female">
      <label for="female">Female</label><br>
      <input type="radio" id="other" name="gender" value="$other">
      <label for="other">Other</label>
	  
	  </div>
    </fieldset>
	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//$id= $_POST['ID'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

if($name !=''||$username !=''||$email !=''||$password !=''||$gender !=''){


$sql = "INSERT INTO users (name, username, email, password, gender)
VALUES ('$name','$username','$email','$password','$gender')";
}
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully"."<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
/*$sql = "SELECT * FROM MyGuests";
$result = $conn->query($sql);


 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "ID: " . $row["ID"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]." "."Email:".$row["email"]."<br>";
        
    echo "0 results";
}




$sql = "DELETE FROM MyGuests WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
 }
*/

mysqli_close($conn);
?>
</body>
</html>


