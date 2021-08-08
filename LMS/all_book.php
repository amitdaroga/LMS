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
<?php
$con=mysqli_connect('localhost','root','','project');
$query="SELECT * FROM `book_detail`";
$run=mysqli_query($con,$query);
	
	if($run==TRUE)
	{
		?>
				<input type="text" style="margin: 12px 40%;padding: 12px 12px"id="myInput" onkeyup="myFunction()" title="Enter Book Id" placeholder="Book Id">
		<table border="1" width="50%" align="center" id="myTable" style="margin-top: 5%">
		<tr style="background-color: #ccc"><th>Book Name</th><th>Book Id</th><th>Author Name</th><th>Book Price</th><th>Book_ISBN</th></tr>
		<?php
	while($data=mysqli_fetch_assoc($run))
	{
	?>
	<tr>
	<td><?php echo $data['book_title'];?></td><td><?php echo $data['book_id'];?></td>
	<td><?php echo $data['book_author'];?></td><td><?php echo $data['book_price'];?></td>
	<td><?php echo $data['b_ISBN'];?></td>
	</tr>
	<?php
	}
	?></table>
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
	<a href="home.php"><button>HOME</button></a>
	<?php
	}
	else
	{
		echo "error!";
	}
?>
</body>
</html>