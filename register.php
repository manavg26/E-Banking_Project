<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<?php include 'db_connect.php';?>
	<?php include 'register.html';?>

	<?php
	session_start();
	if(isset($_POST['register']))
	{
		$name=mysqli_real_escape_string($con,$_POST['Name']);
		$email=mysqli_real_escape_string($con,$_POST['Email']);
		$phone=intval($_POST['Phone']);
		$aadhar=intval($_POST['Aadhar']);
		$pin=intval($_POST['PIN']);
		$cpin=intval($_POST['CPIN']);
		$bal=intval($_POST['Amount']);
		$query="SELECT Account FROM information ORDER BY Account DESC LIMIT 1";
		$query_run=mysqli_query($con,$query);
		$acc=mysqli_fetch_assoc($query_run);
		$new_acc=$acc['Account']+1;
		$_SESSION['na']=$name;
		if($pin==$cpin)
		{
			$insert_query1="INSERT INTO information VALUES($new_acc,'$name','$email',$aadhar,$phone,$bal)";
		    $insert_query2="INSERT INTO login VALUES($new_acc,'$name',$pin)";
		    mysqli_query($con,$insert_query1);
		    mysqli_query($con,$insert_query2);
		    ?>
		    <script type="text/javascript">
		    	document.getElementById("wrong").style.display="none";
		    </script>
		    <?php
		    $_SESSION['acc']=$new_acc;
		    header('Location: new_acc.php');
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
	?>
</body>
</html>