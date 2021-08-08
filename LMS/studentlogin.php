<html>
<head>
<title>STUDENT LOGIN</title>
</head>
<style>
.over
{
 width: 50%;
 margin: 30px 125px;
 padding: 8px 4px;
 border-radius: 30px;
}
input[type=submit]
{
	width: 50%;
 margin: 30px 125px;
 padding: 8px 4px;
 border-radius: 30px;
 background-color: green;
}
input[type=submit]:hover{
	background-color: black;
}
	
</style>
<body background="img\books_library_photoshop_127118_1920x1080.jpg">
<table style="margin-top: 15%;background-color: rgba(255,255,255,.4);" align="center">
<tr>
<td>
<hr>
<h1 align="center" >LIBARAY MANAGEMENT SYSTEM</h1>
<hr>
<form action="scheckpass.php" method="post">
<label class="over"><b>USERNAME</b></label><br>
<input type="text" class="over" name="name" placeholder="username" required="required"><br>
<label class="over"><b>PASSWORD</b></label><br>
<input type="password" class="over" name="password" placeholder="username" required="required"><br>
<input type="submit" name="submit" value="LOGIN">
<a href="registerion_page.php"><p align="center" style="background-color: rgba(255,255,255,.4);color: black">sign up</p></a>
</form>
</tr>
</td>
</table>
</body>
</html>