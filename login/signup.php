<?php
include('conn.php'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sign Up</title>
	</head>
<body>

	<form method="post" action="">
		First Name: <input type="text" name="fname" required/></br>
		Last Name: <input type="text" name="lname" required/></br> 
		Username: <input type="text" name="username" required /></br>
		Password: <input type="password" name="password" required/></br>
				 <input type="submit" name="submit" value="Sign Up"/>
	</form>

	<?php 
		if (isset($_POST['submit'])) {
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$username=$_POST['username'];
		$password=$_POST['password'];

		$result=mysqli_query($con,"INSERT INTO account (usr_fname, usr_lname, usr_username, usr_password) VALUES ('$fname','$lname', '$username', '$password')")or die (mysqli_error());

		 if($result){
		 	echo "Successfully Registered! You can now "?> <a href="login.php">Log In</a>  
		
		<?php }		
		
		}
	?>

</body>
</html>



