<?php 
session_start();
if(!isset($_SESSION["Amit"]))
{
	header('location:adminlogin.php');
}
?>
<html>
<head>
<title>HOME_PAGE</title>
<link href="css/nav.css" rel="stylesheet" type="text/css">
</head>
<style>
input[type=text]{
width: 20%;
padding 12px 16px;
}
.down{
	margin-top: 10%;
}
.over
{
background-color: #85929E;
padding: 5px 5px;
border-radius: 30px;	
}
.new
{
	border-style: solid;
	border-width: 5px;
	border-color: green;
	width: 30%;
}
</style>
<body background="img\library_staircase_room_light_wooden_39639_1920x1080.jpg" ><div style="background-color: rgba(255,255,255,.4)"> 
<h1 style="background-color: rgba(255,255,255,.4);text-align:center"><br>LIBRARY MANAGEMENT SYSTEM<br><br></h1>
<ul>
<li><a class="active" href="home.php">HOME</a></li>
<li><a class="active"href="add_book.php">Add Book</a></li>
<li><a class="active" href="update_page.php">Update Book</a></li>
<li><a class="active"href="remove.php">Remove Book</a></li>
<li><a class="active"href="return_book.php">Return Book</a></li>
</ul></div><hr> <p class="down">
<table align="center" style="background-color: #ccc" class="new">
<tr>
<td>
<h1 align="center">welcome to library</h1>
<form action="search.php" method="post">
<label>Enter Book Id</label><br>
<input type="text" name="id" placeholder="book_id" required="required" style="width: 70%">
<input type="submit" name="search" value="search" >
</form>
<a href="all_book.php"><button class="over"> book_details</button></a>
<form action="student_detail.php" ALIGN="center">
<input type="submit" value="student detail " class="over" >
</form>

<a href="logout_page.php" ><button style="background-color: #85929E;padding: 8px 8px;border-radius: 30px">LOGOUT</button></a>
</td>
</tr>
</table>
</p>
</body>
</html>