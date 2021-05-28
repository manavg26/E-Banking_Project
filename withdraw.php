<!DOCTYPE html>
<html>
<head>
	<title>Withdraw</title>
</head>
<?php
session_start();
?>
<body>
	<?php include 'db_connect.php';?>
	<?php include 'withdraw.html';?>

	<?php
	if(isset($_POST['withdraw']))
	{
		$amount=$_POST['Amount'];
		$acc=$_SESSION['acc'];
		$query="SELECT * FROM information WHERE Account=$acc";
		$query_run=mysqli_query($con,$query);
		$details=mysqli_fetch_assoc($query_run);
		if($amount<$details['Balance'])
		{
			$new_bal=$details['Balance']-$amount;
			$update="UPDATE information SET Balance=$new_bal WHERE Account=$acc";
			mysqli_query($con,$update);
			?>
				<script type="text/javascript">
					document.getElementById("wrong").style.display="none";
				</script>
			<?php
			header('Location: reference.php');
		}
		else
		{
			?>
			<script type="text/javascript">
				document.getElementById("wrong").style.display="block";
				document.getElementById("insert").innerHTML="Not Enough Balance!";
			</script>
			<?php
		}
	}
	?>
</body>
</html>