<?php 
session_start();
if(!isset($_SESSION["Amit"]))
{
	header('location:login.php');
}
$name=$_SESSION["Amit"];
$id=$_SESSION["lala"];
$con=mysqli_connect('localhost','root','','project');
$query="SELECT * FROM `issue_book` where s_name='$name' and s_id='$id'";
$run=mysqli_query($con,$query);
if($run==true)
{
	?><html>
	<head><title> Book Return Detail</title>
	<link href="css/nav2.css" rel="stylesheet" type="text/css">
	</head>
	<body background="img\library_staircase_room_light_wooden_39639_1920x1080.jpg">
<div style="background-color: rgba(255,255,255,.4) "> 
<h1 style="color:;text-align:center"><br>LIBRARY MANAGEMENT SYSTEM<br><br></h1>
<ul>
<li><a class="active" href="user_homepage.php">HOME</a></li>
<li><a class="active" href="user_book_detail.php">Book Detail</a></li>
<li><a class="active" href="user_book_issue.php"><b>Book Issue</b></a></li>
<li><a class="active" href="view_issue_book.php">Book Return</a></li>
</ul></div><hr>
		<table border="1" width="70%" align="center" style="background-color: rgba(255,255,255,.4);margin-top: 5%">
		<tr><td>Book Id</td><td>Book Name</td><td>Book Author Name </td><td>Book Issue Date</td><td>Book Return Date </td></tr>
		<?php
	while($data=mysqli_fetch_assoc($run))
	{
	?>
	<tr style="background-color: #ccc;">
	<td><?php echo $data['b_id'];?></td>
	<td><?php echo $data['book_name'];?></td>
	<td><?php echo $data['b_author'];?></td>
	<td><?php echo $data['issue_date'];?></td>
	<td><?php echo $data['return_date'];?></td>
	</tr>
	<?php
	}
	?></table>
	<?php
}
else{
	echo "ERROR";
}
?>
</body>
</html>