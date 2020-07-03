<?php
   	include("connect.php");
   	
	$conn = Conn();
	
   	if(isset($_GET['temp'])) {
		$rfid = $_GET['rfid'];
		$temp = $_GET['temp'];
		$lat = $_GET['lat'];
		$lon = $_GET['lon'];
		$spd = $_GET['spd'];
		$a1 = $_GET['a1'];
		$a2 = $_GET['a2'];
		$b1 = $_GET['b1'];
		$b2 = $_GET['b2'];
		$c1 = $_GET['c1'];
		$c2 = $_GET['c2'];
		$d1 = $_GET['d1'];
		$d2 = $_GET['d2'];
		$e1 = $_GET['e1'];
		$f1 = $_GET['f1'];
		$f2 = $_GET['f2'];
		$ir = $_GET['ir'];
		$total = $_GET['total'];
		$asap = $_GET['asap'];
	} 

	$sqlt = "insert into data (rfid,suhu, lat, lon, spd, 1A, 1B, 2A, 2B, 3A, 3B, 4A, 4B, 5B, 6A, 6B, seat_act, seat_avg, asap) values ('$rfid','$temp', '$lat', '$lon', '$spd', '$a1', '$a2','$b1','$b2','$c1','$c2','$d1','$d2','$e1','$f1','$f2','$ir','$total','$asap')";
	//mysqli_query($sqlt);

	if ($conn->query($sqlt) === TRUE) {
		echo "New record created successfully<br>";
	} else {
		echo "Error: " . $sqlt . "<br>" . $conn->error;
	}

	$conn->close();

?>
