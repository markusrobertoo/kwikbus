<?php
   	include("connect.php");
   	
	$conn = Conn();
	
   	if(isset($_GET['suhu']) && isset($_GET['rfid'])) {
		$suhu = $_GET['suhu'];
	} else {
		$suhu = "NULL";
	}


	//$tgl_skrg=gmdate("Y-m-d", time()+60*60*8);
	//$jam_skrg=gmdate("H:i:s", time()+60*60*8);


	$sqlt = "insert into data (suhu) values ('$suhu')";
	//mysqli_query($sqlt);

	if ($conn->query($sqlt) === TRUE) {
		echo "New record created successfully<br>";
		echo "Data Suhu ";
		echo $suhu;
	} else {
		echo "Error: " . $sqlt . "<br>" . $conn->error;
	}

	$conn->close();

?>
