<?php

include("koneksi.php");

header("conten-type: aplication/json");
$data = array();
// data default
$plat = 'B 6507 EFB';
$rfid = '';
$suhu = 0;
$seat_act = 0;
$seat_avg = 0;
$spd = 0;
$waktu = '0000-00-00 00:00:00';
$_1A = 0;
$_2A = 0;
$_3A = 0;
$_4A = 0;
$_5A = 0;
$_6A = 0;
$_1B = 0;
$_2B = 0;
$_3B = 0;
$_4B = 0;
$_5B = 0;
$_6B = 0;
$lat = -6.379251;
$lon = 106.885078;
$asap = 0;
// cek status di database
$result = $conn->query("SELECT * FROM data ORDER BY id DESC LIMIT 1");
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $rfid = $row['rfid'];
    $suhu = $row['suhu'];
    $seat_act = $row['seat_act'];
    $seat_avg = $row['seat_avg'];
    $spd = $row['spd'];
    $waktu = $row['waktu'];
    $_1A = $row['1A'];
    $_2A = $row['2A'];
    $_3A = $row['3A'];
    $_4A = $row['4A'];
    // $_5A = $row['5A'];
    $_6A = $row['6A'];
    $_1B = $row['1B'];
    $_2B = $row['2B'];
    $_3B = $row['3B'];
    $_4B = $row['4B'];
    $_5B = $row['5B'];
    $_6B = $row['6B'];
    $lat = $row['lat'];
    $lon = $row['lon'];
    $asap = $row['asap'];
}
$data['data'] = array(
    "rfid" => $rfid,
    "suhu" => $suhu,
    "plat" => $plat,
    "1A" => $_1A,
    "2A" => $_2A,
    "3A" => $_3A,
    "4A" => $_4A,
    "5A" => $_5A,
    "6A" => $_6A,
    "1B" => $_1B,
    "2B" => $_2B,
    "3B" => $_3B,
    "4B" => $_4B,
    "5B" => $_5B,
    "6B" => $_6B,
    "seat_act" => $seat_act,
    "seat_avg" => $seat_avg,
    "lat" => $lat,
    "lon" => $lon,
    "spd" => $spd,
    "waktu" => $waktu,
    "asap" => $asap
);

echo json_encode($data);
$conn->close();
