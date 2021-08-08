<?php
$book_id=$_POST['id'];
$isbn_code=$_POST['code'];
$book_title=$_POST['title'];
$book_author=$_POST['name'];
$book_rs=$_POST['price'];
  $con=mysqli_connect('localhost','root','','project');
  $query= "INSERT INTO `book_detail`(`book_id`, `b_ISBN`, `book_title`, `book_author`, `book_price`) 
  VALUES ('$book_id','$isbn_code','$book_title','$book_author','$book_rs')";
  $run=mysqli_query($con,$query);
  
  if($run==TRUE)
  { 
	echo"<script>alert('data insert ');</script>";
	?>
<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/add_book.php">
<?php
  }
  else
  {
	echo"<script>alert('data is doesnot insert ');</script>";
?>
<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/add_book.php">
<?php
  }
?>