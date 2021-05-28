<!DOCTYPE html>
<html>
<head>
	<title>Deposit</title>
</head>
<?php
session_start();
?>
<body>
	<?php include 'db_connect.php';?>
	<?php include 'deposit.html';?>

	<?php
	if(isset($_POST['deposit']))
	{
		$amount=intval($_POST['Amount']);
		$acc=$_SESSION['acc'];
		$query="SELECT * FROM information WHERE Account=$acc";
		$query_run=mysqli_query($con,$query);
		$details=mysqli_fetch_assoc($query_run);
		$new_bal=$amount+$details['Balance'];
		$update="UPDATE information SET Balance=$new_bal WHERE Account=$acc";
		mysqli_query($con,$update);
		header('Location: reference.php');
	}
	?>
</body>
</html>