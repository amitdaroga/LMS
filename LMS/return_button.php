 <?php 
session_start();
if(isset($_REQUEST["delid"]))
{
 $delid=$_REQUEST['delid'];
$con=mysqli_connect('localhost','root','','project');
$query="DELETE FROM `issue_book` WHERE  b_id='$delid'";
$run=mysqli_query($con,$query);
if($run==true)
{
	?>
 <Script>alert('book  is return ');</script>
		<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/return_book.php">
<?php
}
else
{
	?>
 <Script>alert('book return  eorre');</script>
		<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/return_book.php">
<?php
}
}
?>