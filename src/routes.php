<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{nama}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.html', $args);
});


$app->get('/data/{id}', function (Request $request, Response $response, array $args){

    $id = $args['id'];
    $sql = "SELECT  bus_id, stat, info, 1A, 1B, 2A, 2B, 3A, 3B, 4A, 4B, 5A, 5B, 6A, 6B seat_act, seat_avg, spd, suhu, rfid, lat, lon, waktu, FROM bus  ORDER BY id DESC";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();

    return $response->withJson(["data" => $result], 200);
});
    
//Route Post /temperature
$app->post('/data/post/sensor', function (Request $request, Response $response) {

    $sensor = $request->getParsedBody();

    //Set Query statment
    $sql = "INSERT INTO data (bus_id, stat, info, 1A, 1B, 2A, 2B, 3A, 3B, 4A, 4B, 5A, 5B, 6A, 6B, seat_act, seat_avg, spd, suhu, waktu, rfid, lat, lon,) VALUES (:bus_id, :stat, :info, :1A, :1B, :2A, :2B, :3A, :3B, :4A, :4B, :5A, :5B, :6A, :6B, :seat_act, :seat_avg, :spd, :suhu, :waktu, :rfid, :lat, :lon,)";
    $stmt = $this->db->prepare($sql);

    //Insert data format Json
    $data = [
        ":bus_id" => $sensor['bus_id'],
        ":stat" => $sensor['stat'],
        ":info" => $sensor['info'],
        ":1A" => $sensor['1A'],
        ":1B" => $sensor['1B'],
        ":2A" => $sensor['2A'],
        ":2B" => $sensor['2B'],
        ":3A" => $sensor['3A'],
        ":3B" => $sensor['3B'],
        ":4A" => $sensor['4A'],
        ":4B" => $sensor['4B'],
        ":5A" => $sensor['5A'],
        ":5B" => $sensor['5B'],
        ":6A" => $sensor['6A'],
        ":6B" => $sensor['6B'],
        ":seat_act" => $sensor['seat_act'],
        ":seat_avg" => $sensor['seat_avg'],
        ":spd" => $sensor['spd'],
        ":temp" => $sensor['suhu'],
        ":waktu" => $waktu['waktu'],
        ":rfid" => $sensor['rfid'],
        ":lat" => $sensor['lat'],
        ":lon" => $sensor['lon'],                     
    ];

    if($stmt->execute($data))
        return $response->withJson(["status" => "success", "data" => "1"], 200);

    return $response->withJson(["status" => "failed", "data" => "0"], 200);
})->add($APIkey);    
        
       
/*
//Group Api
$app->group('/temperature', function () use ($app){

    //Route GET /temperature 
    $app->get('', function (Request $request, Response $response){

        $sql = "SELECT * FROM temperature";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $response->withJson(["data" => $result], 200);
    });

    //Route GET /id
    $app->get('/{id}', function (Request $request, Response $response, array $args) {
        $id = $args['id'];
        $sql = "SELECT * FROM temperature WHERE temp_id LIKE $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();

        return $response->withJson(["status" => "success", "data" => $result], 200);
    });

    //Route GET /temperature/cari
    $app->get('/cari/', function (Request $request, Response $response, array $args) {
        $cari = $request->getQueryParam("cari");
        $sql = "SELECT * FROM temperature WHERE temp_id LIKE '$cari%' OR bus_id LIKE '%$cari%' OR templog LIKE '$cari%' OR perusahaan LIKE '$cari%'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $response->withJson(["status" => "success", "data" => $result], 200);
    });

    //Route Post /temperature
    $app->post('/', function (Request $request, Response $response) {

        $sensor = $request->getParsedBody();

        //Set Query statment
        $sql = "INSERT INTO temperature (bus_id, templog) VALUES (:bus_id, :templog)";
        $stmt = $this->db->prepare($sql);

        //Insert data format Json
        $data = [
            ":bus_id" => $sensor['bus_id'],
            ":templog" => $sensor['templog']            
        ];

        if($stmt->execute($data))
            return $response->withJson(["status" => "success", "data" => "1"], 200);

        return $response->withJson(["status" => "failed", "data" => "0"], 200);
    });

    //Route Put /temperature
    $app->put('/{id}', function (Request $request, Response $response, array $args) {
        $id = $args['id'];
        $sensor = $request->getParsedBody();
        $sql = "UPDATE temperature SET bus_id=:bus_id, templog=:templog WHERE temp_id=:temp_id";
        $stmt = $this->db->prepare($sql);

        $data = [
            ":temp_id" => $id,
            ":bus_id" => $sensor['bus_id'],
            ":templog" => $sensor['templog']           
        ];

        if($stmt->execute($data))
            return $response->withJson(["status" => "success", "data" => "1"], 200);

        return $response->withJson(["status" => "failed", "data" => "0"], 204);
    });

    //Route Delete /temperature
    $app->delete('/{id}', function (Request $request, Response $response, array $args) {
        $id = $args['id'];
        $sql = "DELETE FROM temperature WHERE temp_id=:temp_id";
        $stmt = $this->db->prepare($sql);

        $data = [
            ":temp_id" => $id
        ];
        
        if($stmt->execute($data))
            return $response->withJson(["status" => "success", "data" => "1"], 200);
        
        return $response->withJson(["status" => "failed", "data" => "0"], 200);
    });
});
*/