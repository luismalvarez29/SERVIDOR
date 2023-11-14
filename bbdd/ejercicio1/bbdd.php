<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $config = parse_ini_file("config.ini", true);
        $nameserver = $config["servername"];
        $user = $config["username"];
        $pwd = $config["password"];
        try {
            $conection = new PDO("mysql:host=$nameserver", $user, $pwd);
            $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            $nameBD = "Alumnos";
            $bd = "CREATE DATABASE IF NOT EXISTS $nameBD";
            $conection-> exec($bd);
            $conection-> exec("USE $nameBD");
            $bd = "CREATE TABLE IF NOT EXISTS alumno (
                nombre VARCHAR(50), 
                apellido VARCHAR(50) 
            )";
            $conection-> exec($bd);
            return $conection;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    ?>
</body>
</html>