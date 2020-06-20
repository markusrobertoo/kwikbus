<?php


$servername = 'localhost';
$database = 'aaa';
$username = 'root';
$password = '';
//$database = 'kwikbusi_kwikbus';
//$username = 'kwikbusi_admin';
//$password = 'kwikbusadmin';
//$password = 'G2pI2ZNr_tC=';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, suhu, waktu, rfid, lat, lon, spd FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 {
    echo "<table border='2'>
    <tr>
    <th>id</th>
    <th>suhu</th>
    <th>waktu</th>
    <th>rfid</th>
    <th>lat</th>
    <th>lon</th>
    <th>spd</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["suhu"]."</td>
        <td> ".$row["waktu"]."</td>
        <td> ".$row["rfid"]."</td>
        <td> ".$row["lat"]."</td>
        <td> ".$row["lon"]."</td>
        <td> ".$row["spd"]."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>