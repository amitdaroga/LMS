<?php
session_start();
$book_id=$_SESSION["m1"];
$book_title=$_SESSION["m2"];
$book_author=$_SESSION["m3"];
$book_rs=$_SESSION["m4"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE book_detail SET book_title='$book_title',book_author='$book_author',book_price='$book_rs' WHERE book_id='$book_id'";

if ($conn->query($sql) === TRUE) {
	echo"<script>alert('data insert ')</script>";
	?>
	<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/update_page.php">
	<?php 
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
