<?php 
//echo "hello there";
return  [
  'database' => [
    'host' =>  $_ENV['DB_HOST'], // Database server host
    'port' => $_ENV['DB_PORT'], // Database server port
    'dbname'=> $_ENV['DB_DATABASE'], // Database name
    'charset' => 'utf8mb4' // Character set for encoding
  ]
];

