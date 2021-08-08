<?php 
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'project');
if(isset($_POST['search']));
 $id=$_POST['id'];
 $query="SELECT * FROM `book_detail` WHERE book_id='$id'";
$run=mysqli_query($con,$query);
if($run==true)
{
?>
<body background="img\library_staircase_room_light_wooden_39639_1920x1080.jpg">
		<table border="2" width="30%" align="center" style="margin-top: 15%;background-color: rgba(255,255,255,.4)">
		<tr><td>Book Id</td><td>Book ISBN</td><td>Book Name</td><td>Book Author Name</td><td>Book price</td></tr>
		<?php
	while($data=mysqli_fetch_assoc($run))
	{
	?>
	<tr style="background-color: #ccc;text-align: center">
	<td><?php echo $data['book_id'];?></td><td><?php echo $data['b_ISBN'];?></td>
	<td><?php echo $data['book_title'];?></td><td><?php echo $data['book_author'];?></td>
	<td><?php echo $data['book_price'];?></td>
	</tr>
	<?php
	}
	?></table> <?php
	echo"<br><a href='home.php' style='margin: 60px 500px;'><button>home</button></a>";
}
else
{
 echo "agean amit";
}

?>
</body>