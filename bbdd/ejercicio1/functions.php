<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("bbdd.php");
        function insertar($connection, $nombre, $apellido){
            try {
                $bd = "INSERT INTO alumno (nombre, apellido) VALUES ('$nombre', '$apellido')";
                $connection-> exec($bd);
                echo "Se ha añadido correctamente";    
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        function mostrar($connection){
            $bd = "SELECT * FROM alumno";
            $statement = $connection->query($bd);
            $alumnos = $statement->fetchAll(PDO::FETCH_ASSOC);
            if(count($alumnos) > 0){
                echo "<table border=1>
                <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                </tr>";
                foreach($alumnos as $alumno){
                    $nombre = $alumno["nombre"];
                    $apellido = $alumno["apellido"];
                    echo "<tr>
                    <td>$nombre</td>
                    <td>$apellido</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "No hay datos.";
            }
        }
        function verAlumno($connection, $nombre){
            $bd = "SELECT * FROM alumno WHERE nombre = '$nombre'";
            $statement = $connection->query($bd);
            $alumnos = $statement->fetchAll(PDO::FETCH_ASSOC);
            if(count($alumnos) > 0){
                echo "<table border=1>
                <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                </tr>";
                foreach($alumnos as $alumno){
                    $name = $alumno["nombre"];
                    $apellido = $alumno["apellido"];
                    echo "<tr>
                    <td>$name</td>
                    <td>$apellido</td>
                    </tr>";
                }
                echo "</table>";
            } else {
                echo "No hay datos.";
            }
        }
    ?>
</body>
</html>