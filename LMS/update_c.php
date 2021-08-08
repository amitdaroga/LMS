<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
if(isset($_POST['submit']))
	{
		$book_id=$_POST['id'];
		$sql="SELECT * FROM `book_detail` WHERE book_id='$book_id'";
		$query =mysqli_query($con,$sql);
		$row =mysqli_num_rows($query);
		if($row == 1)
		{
			
            $book_title=$_POST['title'];
			$book_author=$_POST['name'];
			$book_rs=$_POST['price'];
			$_SESSION["m1"]=$book_id;
			$_SESSION["m2"]=$book_title;
			$_SESSION["m3"]=$book_author;
			$_SESSION["m4"]=$book_rs;
			header('location:update.php');
		}
		else
		{
			?>
			<script> Book does not update</script>
			<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/update_page.php">
			<?php
		}
	}
	?>