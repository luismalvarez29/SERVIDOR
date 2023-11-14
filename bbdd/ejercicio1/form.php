<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Insertar Alumnos</h3>
    <form method="POST">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
        <br>
        <input type="submit" value="Enviar" name="insertar">
    </form>
    <h3>Mostrar Alumnos</h3>
    <form method="POST">
        <input type="submit" value="Ver Alumnos" name="mostrar"> 
    </form>
    <h3>Buscar Alumnos</h3>
    <form method="POST">
        <label for="alumno">Nombre:</label>
        <input type="text" name="alumno" id="alumno" required>
        <br>
        <input type="submit" value="Buscar" name="buscar">
    </form>
    <br><br>
    <?php
    $connection = include("bbdd.php");
    include("functions.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["insertar"])) {
            insertar($connection, $_POST["name"], $_POST["apellido"]);
        }
        else if (isset($_POST["mostrar"])) {
            mostrar($connection);
        }
        else if (isset($_POST["buscar"])){
            $nombre = $_POST["alumno"];
            verAlumno($connection, $nombre);
        }    
    }
?>
</body>
</html>