  
<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confrimpassword = $_POST['confirmpassword'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','LAB');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into admission(username, email, password, confrim password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Username, $email, $password, $confrimpassword);
		$stmt->execute();
		
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

	}
?>