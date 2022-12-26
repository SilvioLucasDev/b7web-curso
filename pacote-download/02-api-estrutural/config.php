<?php

$db_host = 'localhost';
$db_name = 'devsnotes';
$db_user = 'root';
$db_pass = '';
$db_port = 3307;

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host;port=$db_port", $db_user, $db_pass);

$array = [
    'error' => '',
    'result' => []
];