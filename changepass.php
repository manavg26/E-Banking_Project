<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<?php
session_start();
?>
<body>
	<?php include 'db_connect.php'; ?>
	<?php include 'changepass.html'; ?>

	<?php
	
	if(isset($_POST['change']))
	{
		$curr_pin=intval($_POST['currpin']);
		$new_pin=intval($_POST['newpin']);
		$con_pin=intval($_POST['conpin']);
		$acc=$_SESSION['acc'];
		$query="SELECT * FROM login WHERE Account=$acc";
		$query_run=mysqli_query($con,$query);
		$details=mysqli_fetch_assoc($query_run);
		if($curr_pin==$details['PIN'])
		{
			if($new_pin==$curr_pin)
			{
				?>
				<script type="text/javascript">
					document.getElementById("wrong").style.display="block";
					document.getElementById("insert").innerHTML="You can not put same PIN!";
				</script>
				<?php
			}
			else if($new_pin==$con_pin)
			{
				$update="UPDATE login SET PIN=$new_pin WHERE Account=$acc";
				mysqli_query($con,$update);
				?>
				<script type="text/javascript">
					document.getElementById("wrong").style.display="none";
				</script>
				<?php
				header('Location: pinchanged.php');
			}
			else
			{
				?>
				<script type="text/javascript">
					document.getElementById("wrong").style.display="block";
					document.getElementById("insert").innerHTML="PIN does not matches!";
				</script>
				<?php
			}
		}
		else
		{
			?>
			<script type="text/javascript">
					document.getElementById("wrong").style.display="block";
					document.getElementById("insert").innerHTML="Wrong PIN entered!";
			</script>
			<?php
		}
	}
	?>
</body>
</html>