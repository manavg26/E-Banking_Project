<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php include 'db_connect.php';?>
	<?php include 'login.html';?>

	<?php
	session_start();
	if(isset($_POST['login']))
	{
		$acc=intval($_POST['Account']);
		$pin=intval($_POST['PIN']);
		$query="SELECT * FROM login WHERE Account='$acc'";
		$query_run=mysqli_query($con,$query);
		$count=mysqli_num_rows($query_run);
		$_SESSION['acc']=$acc;
		if($count>0)
		{
			$pincheck=mysqli_fetch_assoc($query_run);
			if($pin==$pincheck['PIN'])
			{
				?>
				<script type="text/javascript">
					document.getElementById("wrong").style.display="none";
				</script>
				<?php
				$_SESSION['user']=$pincheck['Name'];
				header('Location: operations.php');
			}
			else
			{
				?>
				<script type="text/javascript">
					document.getElementById("wrong").style.display="block";
					document.getElementById("insert").innerHTML="Wrong Password!";
				</script>
				<?php
			}
		}
		else
		{
			?>
			<script type="text/javascript">
				document.getElementById("wrong").style.display="block";
				document.getElementById("insert").innerHTML="User does not exist!";
			</script>
			<?php
		}
	}
	?>
</body>
</html>	