<?php
require_once "./connection/config.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $email = $_POST['email'];
  $password =password_hash($_POST['password'],PASSWORD_DEFAULT);
  $sql ="INSERT INTO user (email,password) VALUES ('$email','$password')";
  //$sql = "INSERT INTO profile (userid) VALUES ('$user_id')";

  if($connection->query($sql)==TRUE){
    echo "Registration successiful!";
      header("Location:login.html");
      exit();
  }else{
    echo "Error: ".$sql."<br>" .$connection->error;
  }
}$connection->close();
 ?>
