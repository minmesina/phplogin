<?php
	$con = mysqli_connect("localhost","root","","blog");
	if (!$con){
	  die('Could not connect: ' . mysqli_error());
	}
?>