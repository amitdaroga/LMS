<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$password=$_POST['password'];
		$sql="SELECT * FROM `admin` WHERE user_name='$name' and user_password='$password'";
		$query =mysqli_query($con,$sql);
		$row =mysqli_num_rows($query);
		if($row == 1)
		{
			echo "login successful";
			$_SESSION["Amit"]= $name;
			header('location:home.php');
		}
		else
		{
			?>
			<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/adminlogin.php">
			<?php
		}
	}
	?>