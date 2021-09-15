<?php

$db_host = 'localhost';
$db_port = '3306';
$db_username = 'root';
$db_password = '';
$db_primaryDatabase = 'test';

$dbConnection = mysqli_connect($db_host, $db_username, $db_password, $db_primaryDatabase);

return [
 'LOG_PATH' => __DIR__ . './logs',
 'DB_PATH' => __DIR__ . '/db.json',
 'DB_CONN' => $dbConnection
];
