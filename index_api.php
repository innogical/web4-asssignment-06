<?php 
	include 'connect_.php';

	$name = $_POST["num_pass"];
	$secure = $_POST["num_secure"];



	$sql = "INSERT INTO member_cus (memb_secure, memb_passcard)
	VALUES ('".$secure."', '".$name."')";
	echo $sql;

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header("Location:index.php?");
	 
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
 ?>