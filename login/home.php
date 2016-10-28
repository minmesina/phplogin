<?php
include('conn.php');
session_start();

	if (!isset($_SESSION['user_id'])){
		header('location:index.php');
	}
?>

<?php
	$user_id=$_SESSION['user_id'];

	$result=mysqli_query($con,"SELECT * FROM account WHERE usr_id='$user_id'");
	$data=mysqli_fetch_assoc($result);

	$firstname=$data['usr_fname'];
	$lastname=$data['usr_lname'];

	echo 'Welcome ' . $firstname." ".$lastname ."!";
?>
<br />
<a href="logout.php">logout</a>