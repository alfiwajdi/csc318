<?php
  //init connection to db
  $dbconn = mysqli_connect("localhost","root","","charmant");
  if(isset($_POST['submit'])){
	  
    //capture data from signup page
    $name = mysqli_real_escape_string($dbconn,$_POST['name']);
    $username = mysqli_real_escape_string($dbconn,$_POST['username']);
    $password = mysqli_real_escape_string($dbconn,$_POST['password']);
    $email = mysqli_real_escape_string($dbconn,$_POST['email']);
    $phone = mysqli_real_escape_string($dbconn,$_POST['phone']);
	
    //sql statements
    $sql = "INSERT INTO client(client_name,client_username,client_password,client_email,client_phone)VALUES('$name','$username','$password','$email','$phone')";
    $query = mysqli_query($dbconn,$sql) or die("Error: ".mysqli_error($dbconn));
	
    //close database connection
    mysqli_close($dbconn);
	
    //redirect to log in page
    header("location:Login.html");
  }
?>
