<?php
session_start();
if(isset($_SESSION['client_id']))
{
	$Password = $_POST['new_password'];
	$client_id = $_SESSION['client_id'];
	
	// database connection 
	include("dbconn.php");
	
	$sql = "UPDATE client SET client_password = '$Password'
			WHERE client_id = '$client_id'";

	$query = mysqli_query($dbconn, $sql) or die ("Error: " . mysqli_error($dbconn));
	header("Location: update_charmant.php");
}
?>