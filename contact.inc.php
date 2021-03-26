<?php
 require 'connect.php';
if (!empty($_POST['parere']) && isset($_POST['parere'])) {

	$email = $_POST['email'];
	$username = $_POST['username'];
	$opinion = $_POST['parere'];

	$sql = "INSERT INTO pareri (Username, Parere, Email) 
				VALUES ('$username', '$opinion', '$email')";
	$result = mysqli_query($connect,$sql);

	header("Location: contact.php?info=OK");

	} 	else  {
		header("Location: contact.php?info=error");
	}



?>