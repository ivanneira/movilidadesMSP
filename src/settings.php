<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

//        //configuración de la base de datos
//        'db' => [
//            'host' => "localhost",
//            'user' => "root",
//            'pass' => "",
//            'dbname' => "test"
//        ],

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ]

//        // Monolog settings
//        'logger' => [
//            'name' => 'slim-app',
//            'path' => __DIR__ . '/../logs/app.log',
//            'level' => \Monolog\Logger::DEBUG,
//        ],
    ],
];
