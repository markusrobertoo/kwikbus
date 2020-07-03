<?php

	function Conn(){
		$server="localhost";
		$user="kwikbusi_admin";
		//$pass="G2pI2ZNr_tC=";
		$pass="kwikbusadmin";
			   	
		$conn = new mysqli($server, $user, $pass,"kwikbusi_kwikbus");

		if ($conn ->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
		}
		
		return $conn;
	}
?>

