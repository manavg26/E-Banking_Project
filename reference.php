<!DOCTYPE html>
<html>
<head>
	<title>Reference</title>
</head>
<?php
session_start();
?>
<body>
	<?php include 'db_connect.php'; ?>
    <?php include 'reference.html'; ?>

    <?php
    $ref=rand(10000000,99999999);
    $acc=$_SESSION['acc'];
    $query="SELECT * FROM information WHERE Account=$acc";
    $query_run=mysqli_query($con,$query);
	$details=mysqli_fetch_assoc($query_run);
    ?>
    <script type="text/javascript">
    	document.getElementById("user").innerHTML="Hello, <?php Print $details['Name'] ?>";
    	document.getElementById("ref").innerHTML="Your reference number for your transaction is: <?php Print $ref ?>";
    	document.getElementById("bal").innerHTML="Your balance is: <?php Print $details['Balance'] ?>";
    </script>
</body>
</html>