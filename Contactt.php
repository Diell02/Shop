<?php
		// servername => localhost
		// username => root
		// password => empty
		// database name => Contact
		$conn = mysqli_connect("localhost", "root", "", "Contact");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		if(isset($_POST['submit'])){
			if(empty($_POST['name']) || empty($_POST['lastN']) 
				|| empty($_POST['address']) || empty($_POST['email']) || empty($_POST['message']) ){
				echo"Fill all fields !";
			}
			else{
				
				$name = $_REQUEST['name'];
				$lastN = $_REQUEST['lastN'];
				$address = $_REQUEST['address'];
				$email = $_REQUEST['email'];
				$message = $_REQUEST['message'];
		
				
				$sql = "INSERT INTO dataC VALUES ('$name',
					'$lastN','$address','$email','$message')";
				
				if(mysqli_query($conn, $sql)){
					echo '<script>alert("Mesazhi u dergua me sukses. Ekipi jone do te ju kontaktoj se shpejti.")</script>';

				} else{
					echo '<script>alert("ERROR: 404 (Ju lutem plotesoni te gjitha fushat) $sql.")</script>'
						. mysqli_error($conn);
				}
		
				
				mysqli_close($conn);
			}
		}
		
		
		
?>

