<?php

include("koneksi.php");
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, tanggal, suhu, hum FROM dht11";
$result = $conn->query($sql); */

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>Nomor</th>
    <th>Tanggal</th>
    <th>Suhu</th>
    <th>Kelembaban</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
        "<tr>
        <td>".$row["id"]."</td>
        <th>".$row["tanggal"]."</th>
        <th>".$row["suhu"]."</th> 
        <th>".$row["hum"]."</th>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>