<?php
session_start();
$con=mysqli_connect('localhost','root','','project');
if(isset($_POST['submit']))
	{
		$id=$_POST['b_id'];
		$book_name=$_POST['title'];
		$sql="SELECT * FROM `book_detail` WHERE book_id='$id' and book_title='$book_name'";
		$query =mysqli_query($con,$sql);
		$row =mysqli_num_rows($query);
		if($row == 1)
		{
			$author_name=$_POST['author_name'];
          $issue_date=$_POST['issue_date'];
		  $_SESSION["d1"]=$author_name;
		  $_SESSION["d3"]=$issue_date;
		  $_SESSION["d4"]=$id;
		  $_SESSION["d5"]=$book_name;
            header('location:issue_book.php');
		}
		else
		{
			?>
			<script>alert('Book is does not issue')</script>
			<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost//newp/user_book_issue.php">
			<?php
		}
	}
	?>