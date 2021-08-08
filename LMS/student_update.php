<?php
session_start();
$sid=$_SESSION["lala"];
$susername=$_POST['uname'];
$email=$_POST['email'];
$conact=$_POST['conact'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `student` SET `s_user_name`='$susername',`s_email`='$email',`s_contect`='$conact' WHERE s_id='$sid'";

if ($conn->query($sql) === TRUE) {
	echo"<script>alert('data insert ')</script>";
	$_SESSION["Amit"]=$susername;
	?>
	<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/user_homepage.php">
	<?php 
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
