<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("Location: login.html");
  exit();
}
require_once "./connection/config.php";

$user_id = $_SESSION['user_id'];
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $firstname =$_POST['firstname'];
  $lastname =$_POST['lastname'];

  //$sql= "UPDATE profile SET firstname='$firstname', lastname='$lastname', isCompleted=1 WHERE userid='$user_id'";

  $sql = "INSERT INTO profile (firstname, lastname,userid,isCompleted) VALUES ('$firstname', '$lastname','$user_id',1)";
if($connection->query($sql) == TRUE){
  echo "Profile updated successifully";
  header("Location:#");
}else{
  echo "Error updating profile: ". $connection->error;
}
}
$connection->close();
 ?>
