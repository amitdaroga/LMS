<html>
<head>
	<title>user home page</title>
	<link href="css/nav2.css" rel="stylesheet" type="text/css">
   </head>
   <body background="img\library_staircase_room_light_wooden_39639_1920x1080.jpg">
   <div style="background-color:   rgba(255,255,255,.4) "> 
<h1 style="background-color:  rgba(255,255,255,.4);text-align:center"><br>LIBRARY MANAGEMENT SYSTEM<br><br></h1>
<ul>
<li><a class="active" href="user_homepage.php">HOME</a></li>
<li><a class="active" href="user_book_detail.php">Book Detail</a></li>
<li><a class="active" href="user_book_issue.php">Book Issue</a></li>
<li><a class="active" href="view_issue_book.php">Book Return</a></li>
</ul></div><hr>
<?php 
session_start();
if(!isset($_SESSION["Amit"]))
{
	header('location:studentlogin.php');
}
?>
<h1 align="center" style="background-color:  rgba(255,255,255,.4)">WELCOME TO LIBRARY MANAGEMENT SYSTEM STUDENT DETAILS </h1><?php
$con=mysqli_connect('localhost','root','','project');

	$check= $_SESSION["Amit"];
	$check2= $_SESSION["daroga"];
	$query = "SELECT * FROM `student` WHERE s_user_name='$check' and s_password='$check2'";
	$run=mysqli_query($con,$query);
	
	if($run==TRUE)
	{
		?>
		<table border="1" width="40%" align="center" style="background-color: #ccc;margin-top: 5%;text-align:center">
		<form action="student_update.php" method="post">
		<?php
	while($data=mysqli_fetch_assoc($run))
	{
	?>
	<tr>
	<td>STUDENT ID</td><td> <?php echo $data['s_id']?></td></tr>
	<tr><td>STUDENT NAME</td><td><?php echo $data['s_first_name'].$data['s_last_name'];?></td></tr>
	<tr><td>STUDENT USER NAME</td><td><input type="text" value="<?php echo $data['s_user_name'];?>" name="uname"required></td></tr>
	<tr><td>STUDENT EMAIL ID</td><td><input type="email" value="<?php echo $data['s_email'];?>" name="email" required></td></tr>
	<tr><td>STUDENT CONTACT</td><td><input type="text" value="<?php echo $data['s_contect'];?>" name="conact"required></td></tr>
	<?php
	$_SESSION["lala"]= $data['s_id'];
	}
	?></table>
	
	<input type="submit" style="margin:12px 40%;width: 20%; padding: 10px 10px;background-color: #AF7AC5" value="Update"><br>
	</form>
      	<form align="CENTER" action="logout_page.php" style="margin-top: 2%">
<input type="submit" value="Logout" style="background-color: #AF7AC5; width: 10%;padding: 7px 7px;border-radius: 10px">
</form>
		<?php
	}
	else
	{
		echo "error!";
	}
?>
   </body>
</html>