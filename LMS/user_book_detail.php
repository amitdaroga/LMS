<?php 
session_start();
if(!isset($_SESSION["Amit"]))
{
	header('location:studentlogin.php');
}
?>
<html>
<head>
<title>book_detail</title>
<link href="css/nav2.css" rel="stylesheet" type="text/css">
</head>
<body  background="img\library_staircase_room_light_wooden_39639_1920x1080.jpg">
<div style="background-color: rgba(255,255,255,.4) "> 
<h1 style="color:;text-align:center"><br>LIBRARY MANAGEMENT SYSTEM<br><br></h1>
<ul>
<li><a class="active" href="user_homepage.php">HOME</a></li>
<li><a class="active" href="user_book_detail.php">Book Detail</a></li>
<li><a class="active" href="user_book_issue.php"><b>Book Issue</b></a></li>
<li><a class="active" href="view_issue_book.php">Book Return</a></li>
</ul></div><hr>
<?php
$con=mysqli_connect('localhost','root','','project');
$query="SELECT * FROM `book_detail`";
$run=mysqli_query($con,$query);
	
	if($run==TRUE)
	{
		?>
		<table border="1" width="50%" align="center" style="background-color: #ccc;margin-top: 5%">
		<tr><td>book_id</td><td>book_name</td><td>author_name</td><td>book price</td></tr>
		<?php
	while($data=mysqli_fetch_assoc($run))
	{
	?>
	<tr>
	<td><?php echo $data['book_id'];?></td>
	<td><?php echo $data['book_title'];?></td><td><?php echo $data['book_author'];?></td><td><?php echo $data['book_price'];?></td>
	</tr>
	<?php
	}
	?></table> <?php
	}
	else
	{
		echo "error!";
	}
?>
</body>
</html>