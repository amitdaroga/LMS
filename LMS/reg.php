<?php
$s_id=$_POST['id'];
$s_username=$_POST['username'];
$s_password=$_POST['password'];
$firstname=$_POST['fname'];
$lestname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];

  $con=mysqli_connect('localhost','root','','project');
  $query= "INSERT INTO `student`(`s_id`, `s_user_name`, `s_password`, `s_first_name`, `s_last_name`, `s_email`, `s_contect`)
  VALUES ('$s_id','$s_username','$s_password','$firstname','$lestname','$email','$contact')";
  $run=mysqli_query($con,$query);
  
  if($run==TRUE)
  { 
	echo"<script>alert('data insert ');</script>";
	?>
<META HTTP-EQUIV="Refresh" content="0; URL=studentlogin.php">
<?php
  }
  else
  {
	  echo "error !";
  }
?>