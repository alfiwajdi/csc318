<?php
	
	$id = $_POST['id'];
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	// database connection 
	include("dbconn.php");
	
	$sql = "UPDATE client SET client_name = '$name',
			client_email = '$email',
			client_phone = '$phone'
			WHERE client_id = '$id'";

	$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error($dbconn));
	header("Location: update_charmant.php");

?>