<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$password=$_POST['password'];
		$sql="SELECT * FROM `student` WHERE s_user_name='$name' and s_password='$password'";
		$query =mysqli_query($con,$sql);
		$row =mysqli_num_rows($query);
		if($row == 1)
		{
			echo "login successful";
			$_SESSION["Amit"]=$name;
			$_SESSION["daroga"]=$password;
			header('location:user_homepage.php');
		}
		else
		{
			header('location:studentlogin.php');
		}
	}
	?>