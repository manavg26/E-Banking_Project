<!DOCTYPE html>
<html>
<head>
	<title>Balance</title>
</head>
<?php
session_start();
?>
<body>
	<?php include 'db_connect.php'; ?>
	<?php include 'balance.html'; ?>

	<?php
	$acc=$_SESSION['acc'];
	$query="SELECT * From information WHERE Account=$acc";
	$query_run=mysqli_query($con,$query);
	$details=mysqli_fetch_assoc($query_run);
	?>
	<script type="text/javascript">
		document.getElementById("user").innerHTML="Hello, <?php Print $details['Name'] ?>";
		document.getElementById("bal").innerHTML="Your Balance is: <?php Print $details['Balance'] ?>";
	</script>
</body>
</html>