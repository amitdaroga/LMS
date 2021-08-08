<?php
session_start();
$book_id=$_SESSION["d4"];
$book_title=$_SESSION["d5"];
$author_name=$_SESSION["d1"];
$issue_date=$_SESSION["d3"];
$name=$_SESSION["Amit"];
$s_id=$_SESSION["lala"];
$date = strtotime("+7 day", strtotime("$issue_date"));
$return_date=date("Y-m-d", $date);
$con=mysqli_connect('localhost','root','','project');
$query="INSERT INTO `issue_book`(`s_id`, `s_name`, `b_id`, `book_name`, `b_author`, `issue_date`, `return_date`) 
VALUES ('$s_id','$name','$book_id','$book_title','$author_name','$issue_date','$return_date')";
 $run=mysqli_query($con,$query);
if($run==TRUE)
	{
		echo $book_id.$author_name.$book_title
		?><Script>alert('book issue sucessfuly');</script>
		<META HTTP-EQUIV="Refresh" content="0; URL=http://localhost/newp/user_book_issue.php"; >
		<?php
		
	}
	else{
		?>
		<Script>alert('this book is allready issue');</script>
		<META HTTP-EQUIV="Refresh" content="0; url=http://localhost/newp/user_book_issue.php>
	<?php
}
?>
