<?php


$servername = 'localhost';
$database = 'kwikbusi_kwikbus';
$username = 'kwikbusi_admin';
$password = 'kwikbusadmin';
// $password = 'G2pI2ZNr_tC=';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, suhu, waktu, rfid, lat, lon, spd, 1A, 1B, 2A, 2B, 3A, 3B, 4A, 4B, 5B, 6A, 6B FROM data ORDER BY id DESC LIMIT 20";
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
    <th>1A</th>
    <th>1B</th>
    <th>2A</th>
    <th>2B</th>
    <th>3A</th>
    <th>3B</th>
    <th>4A</th>
    <th>4B</th>
    <th>5B</th>
    <th>6A</th>
    <th>6B</th>
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
        <td> ".$row["1A"]."</td>
        <td> ".$row["1B"]."</td>
        <td> ".$row["2A"]."</td>
        <td> ".$row["2B"]."</td>
        <td> ".$row["3A"]."</td>
        <td> ".$row["3B"]."</td>
        <td> ".$row["4A"]."</td>
        <td> ".$row["4B"]."</td>
        <td> ".$row["5B"]."</td>
        <td> ".$row["6A"]."</td>
        <td> ".$row["6B"]."</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>