<?php
  session_start();

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
      <div class="content_right_l">
        <h3>Profile</h3>
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
            echo "<table>";
            while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>Id :</td>";
              echo "<td>".$row["id"]."</td>";
              echo "</tr>";
              
              echo "<tr>";
              echo "<td>Name :</td>";
              echo "<td>".$row["name"]."</td>";
              echo "</tr>";
              
              echo "<tr>";
              echo "<td>Email :</td>";
              echo "<td>".$row["email"]."</td>";
              echo "</tr>";
              
              echo "<tr>";
              echo "<td>Username :</td>";
              echo "<td>".$row["username"]."</td>";
              echo "</tr>";
              $picture=$row["picture"];

            }
            echo "</table>";
          } else {
            echo "0 results";
          }

          $conn->close();
          
          
         ?>
      </div>
      <div class="content_right_r">
        <img src="<?php echo $picture; ?>" alt="" />
      </div>
    </div>
  </div>
  <div class="footer_area">
    <h3>ziad</h3>
  </div>
</body>
</html>