<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user home page</title>
	<link href="css/nav.css" rel="stylesheet" type="text/css">
   </head>
   <style>
    .abc{
		background-color:  rgba(255,255,255,.4);
	}
	.over{
		margin: 12px 500px;
		width: 20%;
		padding: 7px 7px;
		border-radius: 30px;
		background-color: #ccc;
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
</ul><hr></div><br><br>
<label class="over">Enter Book Id</label>
<input type="text" class="over"id="myInput" onkeyup="myFunction()" title="Enter Book Id" placeholder="Book Id">
</body>
</html>
<?php 
session_start();
if(!isset($_SESSION["Amit"]))
{
	header('location:adminlogin.php');
}
$con=mysqli_connect('localhost','root','','project');
$query="SELECT * FROM `issue_book`";
$run=mysqli_query($con,$query);
if($run==true)
{
	?>
		<table id="myTable" class="abc"border="3" height="5%" width="70%"  align="center" style="margin-top: 5%;text-align: center;">
		<tr><th>book id</th><th>student id</th><th>student name</th><th>book name</th><th>author_name</th><th>issue_date</th><th>return_date</th></tr>
		<?php
	while($data=mysqli_fetch_assoc($run))
	{
	?>
	<tr style="background-color: #ccc;">
	<td><?php echo $data['b_id']?></td>
	<td><?php echo $data['s_id']?></td>
	<td><?php echo $data['s_name']?></td>
	<td><?php echo $data['book_name'];?></td>
	<td><?php echo $data['b_author'];?></td>
	<td><?php echo $data['issue_date'];?></td>
	<td><?php echo $data['return_date']; ?></td>
	<td><a href="return_button.php?delid=<?php echo $data['b_id']?>"><button class="abc">return</button></a></td>
	</tr>
	<?php
	}
	?>
	</table>
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
	echo "agin";
}
?>
</html>