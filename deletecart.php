<?php
include("dbconn.php");
if(isset($_POST['submit'])){
  $cartid = $_POST['cartid'];

  $sql = "UPDATE cart SET status = '1' WHERE cart_id = '$cartid'";
  $query = mysqli_query($dbconn,$sql);
  header("Location:cart.php");
}
?>
