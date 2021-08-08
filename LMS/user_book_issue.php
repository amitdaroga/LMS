<?php 
session_start();
if(!isset($_SESSION["Amit"]))
{
	header('location:studentlogin.php');
}
?>
<html>
<head>
<title>book issue</title>
<link href="css/nav2.css" rel="stylesheet" type="text/css">
</head>
<style>
select{
	width: 20%;
	padding: 10px 10px;
	border-radius: 30px;
	margin: 12px 590px;
}
.over{
	width: 20%;
	padding: 10px 10px;
	border-radius: 30px;
	margin: 12px 590px;
}
input[type=submit]{
	width: 20%;
	padding: 10px 10px;
	border-radius: 30px;
	margin: 12px 600px;
	background-color: green;
}
input[type=submit]: hover{
background-color: blue;
}
</style>
<body  background="img\library_staircase_room_light_wooden_39639_1920x1080.jpg">
<?php 
$con =$con=mysqli_connect('localhost','root','','project');
$query="SELECT * FROM `book_detail`";
$run=mysqli_query($con,$query);
if($run==true)
{?>
<div style="background-color: rgba(255,255,255,.4)"> 
<h1 style="text-align:center"><br>LIBRARY MANAGEMENT SYSTEM<br><br></h1>
<ul>
<li><a class="active" href="user_homepage.php">HOME</a></li>
<li><a class="active" href="user_book_detail.php">Book Detail</a></li>
<li><a class="active" href="user_book_issue.php"><b>Book Issue</b></a></li>
<li><a class="active" href="view_issue_book.php">Book Return</a></li>
</ul></div><hr>
<form action="issue_c.php" method="post">
<table style="background-color:rgba(255,255,255,.4); margin-top: 8%">
<tr>
<td>
<label class="over"><b>book_ID</b></label><br>
<input type="text" class="over" name="b_id" placeholder="book id" required="required"><br>
<label class="over"><b>book_title</b></label><br>
<input type="text" class="over" name="title" placeholder="book_tilte" required="required"><br>
<label class="over"><b>author_name</b></label><br>
<select name="author_name">
<?php
while($data=mysqli_fetch_assoc($run))
{?>
<option><?php echo $data['book_author'];?></option>
<?php
}
?>
</select><?php
}
?>
<label class="over" ><b>Issue_Date</b></label><br>
<input type="date" class="over" name="issue_date" placeholder="issue date" required="required"><br>
<input type="submit" value="issue_book" name="submit" >
</td>
</tr>
</table>
</form>
</body>
</html>