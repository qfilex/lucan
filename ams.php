<?php
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','root');
	define('DB','finalab');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	
	$id = $_POST['id'];
	$minute = $_POST['minute'];
	
	$sql = "insert into mint (id, mint) values ('$id','$minute')";
	
	if(mysqli_query($con, $sql)){
		echo "<div class=\"alert alert-success\" role=\"alerts\">succes</div>";

	}else{
		     die("Connection failed: " . $conn->connect_error);

	}
?>