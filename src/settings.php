<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Koneksi database dbc
        'dbc' => [
            'host' => 'localhost',
            'user' => 'root',
            'pass' => '',
            'dbname' => 'kwikbusi_kwikbus',
            'driver' => 'mysql'
        ],
        // Koneksi database dba
        'dba' => [
            'host' => 'localhost',
            'user' => 'kwikbusi_admin',
            'pass' => 'kwikbusadmin',
            'dbname' => 'kwikbusi_kwikbus',
            'driver' => 'mysql'
        ]
    ],
];
