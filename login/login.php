<?php
include('conn.php'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Log In</title>
	</head>
<body>

	<form method="post" action=""> 
		Username:<input type="text" name="username"/></br>
		Password:<input type="password" name="password"/></br>
				 <input type="submit" name="submit" value="Login"/>
	</form>

	<?php 
		if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$result=mysqli_query($con,"SELECT * FROM account WHERE usr_username='$username' AND usr_password='$password'")or die (mysqli_error());

		 if(!$result){
		 	header('location:index.php');
		 }else{
		 	$data=mysqli_fetch_assoc($result);				
				session_start();
				$_SESSION['user_id']=$data['usr_id'];
				header('location:home.php');
		 }		
		
		}
	?>

</body>
</html>



