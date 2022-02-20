<?php
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "Contact");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$lastN = $_REQUEST['lastN'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO dataC VALUES ('$name',
			'$lastN','$address','$email','$message')";
		
		if(mysqli_query($conn, $sql)){
			echo "Mesazhi u dergua me sukses. Ekipi jone do te ju kontaktoj se shpejti.";

		} else{
			echo "ERROR: 404 (Te dhenat nuk jane ruajtur) $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		
?>

