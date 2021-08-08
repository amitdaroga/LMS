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
<?php
$con=mysqli_connect('localhost','root','','project');
$query="SELECT * FROM `student`";
$run=mysqli_query($con,$query);
	
	if($run==TRUE)
	{
		?>
		<input type="text" style="margin: 12px 40%;padding: 12px 12px"id="myInput" onkeyup="myFunction()" title="Enter Student Id" placeholder="Student Id">
		<table border="1" id="myTable" width="50%" align="center" style="background-color: #ccc;margin-top: 5%">
		<tr><th>Student Id</th><th> student User Name</th><th>Student Password</th><th>Student Name<th>student Email</th><th>Student Contact</th></tr>
		<?php
	while($data=mysqli_fetch_assoc($run))
	{
	?>
	<tr>
	<td><?php echo $data['s_id'];?></td>
	<td><?php echo $data['s_user_name'];?></td><td><?php echo $data['s_password'];?></td><td><?php echo $data['s_first_name'].$data['s_last_name'];?></td>
	<td><?php echo $data['s_email'];?></td>
	<td><?php echo $data['s_contect'];?></td>
	</tr>
	<?php
	}
	?></table> <a href="http://localhost//newp/home.php"><button>HOME</button></a>
	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

	<?php
	}
	else
	{
		echo "<script>alert('student detail does not show')<script>";
	}
?>
</body>
</html>