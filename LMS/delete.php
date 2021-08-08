<?php 
$book_id=$_POST['id'];
  $con=mysqli_connect('localhost','root','','project');
  $query= "DELETE FROM `book_detail` WHERE book_id='$book_id'";
  $run=mysqli_query($con,$query);
  if($run==TRUE)
  { 
 echo"<script>alert('detete data');</script>";
 ?>
 <META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/remove.php">
  <?php
  }
  else
  {
	  echo "error !";
  }

 ?>
