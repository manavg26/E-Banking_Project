<!DOCTYPE html>
<html>
<head>
	<title>Facilities</title>
</head>
<?php
    session_start();
	$user=$_SESSION['user'];
	?>
<body>
	<?php include 'Operations.html'; ?>
	
	<script type="text/javascript">
		document.getElementById("name_enter").innerHTML="Hello, <?php Print $user ?>";
	</script>
	<?php
	?>
</body>
</html>