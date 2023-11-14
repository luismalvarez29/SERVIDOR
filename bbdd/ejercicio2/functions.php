
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $connection = include("../ejercicio1/bbdd.php");
        function exportarCSV($connection){
            $bd = "SELECT * FROM alumno";
            $statement = $connection->query($bd);
            $alumnos = $statement->fetchAll(PDO::FETCH_ASSOC);
            if(isset($alumnos)){
                $file = fopen("DatosBD.csv", "w");
                foreach($alumnos as $alumno){
                    foreach($alumno as $datos){
                        $datos = trim($datos);
                    }
                    fputcsv($file, $alumno);
                }
                fclose($file);
                echo "<br>La conversión a CSV se ha realizado correctamente.";
            } else {
                echo "No hay datos.";
            }
        }
        function existe($connection, $nombre, $apellido)
        {
            $bd = "SELECT COUNT(*) as count FROM alumno WHERE nombre = :nombre AND apellido = :apellido";
            $statement = $connection->prepare($bd);
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':apellido', $apellido);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return ($result['count'] > 0);
        }
        function insertar($connection, $nombre, $apellido){
            try {
                $bd = "INSERT INTO alumno (nombre, apellido) VALUES ('$nombre', '$apellido')";
                $connection-> exec($bd);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        function exportarMYSQL($connection){
            $file = fopen("DatosBD.csv", "r");
            while(($datos = fgetcsv($file)) != false){
                $name = trim($datos[0]);
                $apellido = trim($datos[1]);
                if (!existe($connection, $name, $apellido)) {
                    insertar($connection, $name, $apellido);
                }
            }
            fclose($file);
            echo "<br>La conversión a MYSQL se ha realizado correctamente.";
        }
    ?>
</body>
</html>