<?php
//Coonnection
$host ="localhost";
$user = "myadmin";
$pass = "myadmin@2024";
$database = "bit22024";
//create the connection
$conn = new mysqli($host, $user,$pass,$database);
//check if the connection passed
if($conn ->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
//check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//prere and bind the parameters
	$stmt = $conn->prepare("INSERT INTO person(firstname,lastname,address,city) VALUES (?,?,?,?)");
	$stmt ->bind_param("ssss",$firstname,$lastname,$address,$city);
	//Set parameter and execute

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$city = $_POST['city'];

	if($stmt->execute()==TRUE){
		echo "New record has been added successufully";
	}else{
		echo "Error: " .$stmt->error;
	}
	$stmt->close();
}
$conn->close();

?>
