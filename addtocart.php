<?php
session_start();
if(isset($_SESSION['client_id']))
{
	  //init connection to db
	  $dbconn = mysqli_connect("localhost","root","","charmant");
	  if(isset($_POST['submit'])){
		//capture data from product page
		$clientid = mysqli_real_escape_string($dbconn,$_SESSION['client_id']);
		$productid = mysqli_real_escape_string($dbconn,$_POST['product_id']);
		//sql statements
		//Status = 0 means not deleted yet
		//Status = 1 means deleted or cancel
		$sql = "INSERT INTO cart(client_id,product_id,status,qty)VALUES('$clientid','$productid','0','1')";
		$query = mysqli_query($dbconn,$sql) or die("Error: ".mysqli_error($dbconn));
		//close database connection
		mysqli_close($dbconn);
		//redirect to homepage
		header("location:product1.php");
	  }
}
?>
