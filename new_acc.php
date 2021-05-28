<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<link href="layout/styles/forms.css" rel="stylesheet" type="text/css" media="all">
	<style type="text/css">
		h4
		{
			font-size: 20px;
		}
	</style>
</head>
<body>
	<?php include 'db_connect.php'?>

	<?php
	session_start();
	?>
	<form>
		<h1>Account Number</h1>
		<div class="formcontainer">
			<hr/>
			<div class="container">
				<h4 id="user">Hello, <?php Print $_SESSION['na'] ?></h4>
				<h4 id="acc">Your account number is: <?php Print $_SESSION['acc'] ?></h4>
				<button type="button" onclick="location.href='login.php'">LOGIN</button>
			</div>
		</div>		
	</form>	
	<?php
	session_destroy();
	?>
</body>
</html>