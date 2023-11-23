<?php
    require_once __DIR__ . '/vendor/autoload.php';
    $config = parse_ini_file("config.ini", true);
    $servername = $config["servername"];
    $usr = $config["username"];
    $pwd = $config["password"];
    $local = $config["database"];
    $agenda = $config["collection"];
    $port = $config["port"];
    $collection = (new MongoDB\Client)->$local->$agenda;
?>