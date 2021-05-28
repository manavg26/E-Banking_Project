<!DOCTYPE html>
<html>
<head>
	<title>Transfer</title>
</head>
<?php
session_start();
?>
<body>
	<?php include 'db_connect.php';?>
	<?php include 'transfer.html';?>

	<?php
	if(isset($_POST['transfer']))
	{
		$acc_tt=intval($_POST['to']);
		$acc_owner=$_SESSION['acc'];
		$amount=intval($_POST['money']);
		$query="SELECT * FROM information WHERE Account=$acc_tt";
		$query_run=mysqli_query($con,$query);
		$count=mysqli_num_rows($query_run);
		if($acc_tt==$acc_owner)
		{
			?>
			<script type="text/javascript">
					document.getElementById("wrong").style.display="block";
					document.getElementById("insert").innerHTML="You can not transfer funds to your account!";
			</script>
			<?php
		}
		else if($count>0)
		{
			$details_tt=mysqli_fetch_assoc($query_run);
			$query_owner="SELECT * FROM information WHERE Account=$acc_owner";
			$query_run_owner=mysqli_query($con,$query_owner);
			$details_from=mysqli_fetch_assoc($query_run_owner);
			if($amount<$details_from['Balance'])
			{
				$new_bal_owner=$details_from['Balance']-$amount;
				$new_bal_tt=$details_tt['Balance']+$amount;
				$update_owner="UPDATE information SET Balance=$new_bal_owner WHERE Account=$acc_owner";
				$update_tt="UPDATE information SET Balance=$new_bal_tt WHERE Account=$acc_tt";
				mysqli_query($con,$update_owner);
				mysqli_query($con,$update_tt);
				?>
				<script type="text/javascript">
					document.getElementById("wrong").style.display="none";
				</script>
				<?php
				header('Location: balance.php');
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
		else
		{
			?>
			<script type="text/javascript">
					document.getElementById("wrong").style.display="block";
					document.getElementById("insert").innerHTML="Account does not exists!";
			</script>
			<?php
		}
	}
	?>
</body>
</html>