<?php 
session_start();
if(!isset($_SESSION["Amit"]))
{
	header('location:adminlogin.php');
}
?>
<html>
<head>
<title>remove_PAGE</title>
<link href="css/nav.css" rel="stylesheet" type="text/css">
</head>
<style>
.over{
	width: 80%;
	margin: 10px 30px;
	padding: 7px 7px;
	border-radius: 30px;
}
input[type=submit]{
	width: 30%;
	margin: 10px 110px;
	background-color: #B2BABB ;
	border-radius: 12px;
}
input[type=submit]:hover{
	background-color: #5D6D7E ;
}
#degine
{
	background-color: #7D3C98 ;
	color: black;
}	
</style>
<body background="img\library_staircase_room_light_wooden_39639_1920x1080.jpg"><div id="degine"> 
<h1 style="background-color: rgba(255,255,255,.4);text-align:center"><br>LIBRARY MANAGEMENT SYSTEM</h1>
<ul>
<li><a class="active" href="home.php">HOME</a></li>
<li><a class="active"href="add_book.php">Add Book</a></li>
<li><a class="active" href="update_page.php">Update Book</a></li>
<li><a class="active"href="remove.php">Remove Book</a></li>
<li><a class="active"href="return_book.php">Return Book</a></li>
</ul><hr></div>
<div style="margin-top: 100px " align="center ">
<table style="margin: 30px 400px;width: 30%;background-color: rgba(255,255,255,.4)">
<tr>
<td>
<form action="delete.php" method="post">
<label style="margin: 10px 30px"><b>Enter BOOK_ID</b></label><br>
<input type="text"  class="over"name="id" placeholder="BOOK_ID" required="required"><br>
<input type="submit" name="submit" value="delete button">
</form>
</td>
</tr>
</table>
</div>  
</body>
</html>