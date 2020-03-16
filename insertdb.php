<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if($_POST["password"] != $_POST["cpassword"])
    {
        echo "password and confirm password didmt match ";
    	include_once ('input.php');
    }else{



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name= $_POST["name"];

$email= $_POST["email"];

$gender= $_POST["gender"];


$username= $_POST["username"];

$password= $_POST["password"];




$sql = "INSERT INTO user (name, email, gender, username, password)
VALUES ('$name', '$email', '$gender','$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>