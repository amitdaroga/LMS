<html>
<head>
<title>REGISTERION_PAGE</title>
<style>
.over
{
	width: 60%;
	padding: 7px 7px;
	border-radius: 30px;
	background-color:
	margin: 7px 110px;
}
table{
	width:50%;
	color: #ffff00;
	margin: 10px 400px ;
}
p{
	margin: 10px -1px;
}
</style>
<body background="img\library_staircase_room_light_wooden_39639_1920x1080.jpg">
<h1 align="center"style="background-color: rgba(255,255,255,.4);font-size: 80px">LIBARAY MANAGEMENT SYSTEM</h1>
<table align="center" >
<tr>
<td>
<form action="reg.php" method="post">
<p><label>STUDENT ID</labal></p>
<input type="text" class="over" name="id" placeholder="Student Id" required="required">
<p><label>STUDENT USER NAME</labal></p>
<input type="text" class="over" name="username" placeholder="User Name" required="required">
<p><label>PASSWORD</labal></p>
<input type="password" class="over" name="password" placeholder="Password" required="required">
<p><label> STUDENT FIRSTNAME</labal></p>
<input type="text" class="over" name="fname" placeholder="First Name" required="required">
<p><label>STUDENT LASTNAME</labal></p>
<input type="text" class="over" name="lname" placeholder="Last Name" required="required">
<p><label>EMAIL ID</labal></p>
<input type="email" class="over" name="email" placeholder="Email" required="required">
<p><label>CONTACT NUMBER</labal></p>
<input type="text" class="over" name="contact" placeholder="contact" required="required"><BR><BR>
<input type="submit" name="submit" value="submit" style="background-color: #DAA520;width: 50%;margin: 1px 30px;padding: 7px 7px">
</form>
</td>
</tr>
</table>
</body>
</html>