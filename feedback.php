<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
</head>
<body>
	<?php include 'db_connect.php'; ?>
	<?php include 'feedback.html'; ?>

	<?php
	if(isset($_POST['feedback']))
	{
		$name=mysqli_real_escape_string($con,$_POST['Name']);
	    $email=mysqli_real_escape_string($con,$_POST['Email']);
	    $phone=intval($_POST['Phone']);
	    $staff=mysqli_real_escape_string($con,$_POST['Name_of_Staff']);
	    $branch=mysqli_real_escape_string($con,$_POST['Branch']);
	    $feedback=mysqli_real_escape_string($con,$_POST['Feed']);
	    $query="INSERT INTO feedback VALUES('$name','$email',$phone,'$staff','$branch','$feedback')";
	    $query_run=mysqli_query($con,$query);
	    header('Location: thanks_for_feedback.php');
	}
	?>
</body>
</html>