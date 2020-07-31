<?php
	require('config/config.php');
require('config/database.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$msg = mysqli_real_escape_string($conn, $_POST['msg']);
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$lname = mysqli_real_escape_string($conn,$_POST['lname']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		// echo $msg;

		$query = "INSERT INTO customer_message(firstname, lastname, email, message) VALUES('$fname', '$lname', '$email','$msg')";

		if(mysqli_query($conn, $query)){
			// echo "success";
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
?>

