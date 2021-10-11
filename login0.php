<?php
	session_start();

    //init connection to db
    $dbconn = mysqli_connect("localhost","root","","charmant");
    if(isset($_POST['submit'])){
		
      //capture input from login page
      $username = mysqli_real_escape_string($dbconn,$_POST['username']);
      $password = mysqli_real_escape_string($dbconn,$_POST['password']);
	  
      //sql statements
      $sql = "SELECT client_id,client_username,client_password from client where client_username = '$username' AND client_password = '$password'";
      $query = mysqli_query($dbconn,$sql) or die("Error: can't connect to database!");
      $data = mysqli_fetch_assoc($query);
      $row = mysqli_num_rows($query);
      if($row==1){
		  
        //init session to store user information
        $_SESSION['client_id'] = $data['client_id'];
        $_SESSION['client_username'] = $data['client_username'];
        $_SESSION['client_password'] = $data['client_password'];
		
        //redirect to dashboard
        header("location:index.php");
      }
	  else{
       //give error because no user found
       //redirect to log in page
       echo '<script>alert("user not found");</script>';
       header("location:Login.html");
      }
      mysqli_close($dbconn);
    }
?>
