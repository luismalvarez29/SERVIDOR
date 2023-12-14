<?php
    require_once __DIR__ . '/vendor/autoload.php';
    $config = parse_ini_file("config.ini", true);
    $servername = $config["servername"];
    $usr = $config["username"];
    $pwd = $config["password"];
    $agenda = $config["database"];
    $contactos = $config["collection"];
    $port = $config["port"];
    $cliente = new MongoDB\Client("mongodb+srv://luismalvarez:Malvarez04179@cluster0.zbw8syn.mongodb.net/?retryWrites=true&w=majority");
    $collection = $cliente->$agenda->$contactos;
?>