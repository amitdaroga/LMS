<html>
<head>
<title>ADMIN LOGIN</title>
</head>
<style>
input[type=text],input[type=password],label
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
<form action="acheckpass.php" method="post">
<label><b>USERNAME</b></label><br>
<input type="text" name="name" placeholder="username" required="required"><br>
<label><b>PASSWORD</b></label><br>
<input type="password" name="password" placeholder="username" required="required"><br>
<input type="submit" name="submit" value="LOGIN">
</form>
</tr>
</td>
</table>
</body>
</html>