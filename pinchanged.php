<!DOCTYPE html>
<html>
<head>
	<title>PIN Changed</title>
	<link href="layout/styles/forms.css" rel="stylesheet" type="text/css" media="all">
	<style type="text/css">
		h4
		{
			font-size: 20px;
		}
	</style>
</head>
<?php
session_start();
?>
<body>
	<?php 'db_connect.php'; ?>
	<?php
	$name=$_SESSION['user'];
	?>
	<form>
		<h1>PIN Changed</h1>
		<div class="formcontainer">
			<hr/>
			<div class="container">
				<h4>Hello, <?php Print $name ?></h4>
				<h4>Your PIN has changed</h4>
				<button type="button" onclick="location.href='login.php'">GO TO LOGIN</button>
    		</div>
		</div>
	</form>	
	<?php
	session_destroy();
	?>
</body>
</html>