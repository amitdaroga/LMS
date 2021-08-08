 <?php 
session_start();
$id=$_SESSION["lala"];
$s_name=$_SESSION["Amit"];
$date=date("y-m-d");
$con=mysqli_connect('localhost','root','','project');
$query="INSERT INTO `book_return`(`s_id`, `s_name`, `current_date`) VALUES ('$id','$s_name','$date')";
$run=mysqli_query($con,$query);
if($run==true)
{
	?>
 <Script>alert('book return sucessfuly');</script>
		<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/return_book.php">
<?php
}
else
{
	?>
<Script>alert('book return erroe ');</script>
		<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/return_book.php">	
<?php
}
?>