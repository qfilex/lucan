<?php
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','root');
	define('DB','finalab');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	
	$lname = $_POST['lastname'];
	$fname = $_POST['firstname'];
	
	$sql = "insert into clienti (Nume, Prenume) values ('$fname','$lname')";
	
	if(mysqli_query($con, $sql)){
		echo "<div class=\"alert alert-success\" role=\"alerts\">succes</div>";

	}else{
		     die("Connection failed: " . $conn->connect_error);

	}
?>