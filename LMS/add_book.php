<?php 
session_start();
if(!isset($_SESSION["Amit"]))
{
	header('location:adminlogin.php');
}
?>
<html>
<head>
<title>ADD_BOOKS</title>
<link href="css/nav.css" rel="stylesheet" type="text/css">
</head>
<style>
.over
{
	width: 80%;
	padding: 6px 6px;
	border-radius: 30px;
}
.hp
{
background-color: rgba(255,255,255,.4);
width: 30%;	
}
</style>
<body background="img\library_staircase_room_light_wooden_39639_1920x1080.jpg">
<div style="background-color: rgba(255,255,255,.4)"> 
<h1 style="background-color: rgba(255,255,255,.4);text-align:center"><br>LIBRARY MANAGEMENT SYSTEM<br><br></h1>
<ul>
<li><a class="active" href="home.php">HOME</a></li>
<li><a class="active"href="add_book.php">Add Book</a></li>
<li><a class="active" href="update_page.php">Update Book</a></li>
<li><a class="active"href="remove.php">Remove Book</a></li>
<li><a class="active"href="return_book.php">Return Book</a></li>
</ul><hr>
</div>
<table style="margin: 30px 360px;"class="hp" >
<tr>
<td>
<form action="insert2.php" method="post" align="center">
<h6 style="font-size: 20"><label><b><i>BOOK ID</i></b></label><h6>
<input type="text" class="over"name="id"placeholder="BOOK_ID" required="required">
<h6 style="font-size: 20"><label><b><i>BOOK ISBN CODE</i></b></label><h6>
<input type="text" class="over" name="code"placeholder="BOOK ISBN CODE" required="required">
<h6 style="font-size: 20"><label><b><i>BOOK TITLE </b></label><h6>
<input type="text" class="over" name="title"placeholder="BOOK TITLE" required="required">
<h6 style="font-size: 20"><label><b><i>BOOK AUTHER</i></b></label><h6>
<input type="text" class="over" name="name"placeholder="BOOK AUTHER" required="required">
<h6 style="font-size: 20"><label><b><i>BOOK PRICE</i></b></label><h6>
<input type="text" class="over" name="price"placeholder="BOOK price" required="required"><br><br>
<input type="submit" class="over" name="submit" value="add_book" style="background-color:green">
</form>
</td>
</tr>
</table>  
</body>
</html> 