<?php
	session_start();

    //init connection to db
    $dbconn = mysqli_connect("localhost","root","","charmant");
    if(isset($_POST['submit'])){
		
      //capture input from login page
      $username = mysqli_real_escape_string($dbconn,$_POST['username']);
      $password = mysqli_real_escape_string($dbconn,$_POST['password']);
	  
      //sql statements
      $sql = "SELECT admin_id,admin_username,admin_password from admin where admin_username = '$username' AND admin_password = '$password'";
      $query = mysqli_query($dbconn,$sql) or die("Error: can't connect to database!");
      $data = mysqli_fetch_assoc($query);
      $row = mysqli_num_rows($query);
      if($row==1){
		  
        //init session to store user information
        $_SESSION['admin_id'] = $data['admin_id'];
        $_SESSION['admin_username'] = $data['admin_username'];
        $_SESSION['admin_password'] = $data['admin_password'];
		
        //redirect to dashboard
        header("location:admin_page.php");
      }
	  else{
       //give error because no user found
       //redirect to log in page
       echo '<script>alert("user not found");</script>';
       header("location:login_admin.html");
      }
      mysqli_close($dbconn);
    }
?>
