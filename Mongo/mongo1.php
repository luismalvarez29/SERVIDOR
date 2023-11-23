<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Insertar contacto</h3>
    <form method="POST">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="tel">Telefono:</label>
        <input type="text" name="tel" id="tel" required>
        <br>
        <input type="submit" value="Enviar" name="insertar">
    </form>
    <h3>Mostrar contactos</h3>
    <form method="POST">
        <input type="submit" value="Ver contactos" name="mostrar"> 
    </form>
    <h3>Buscar contacto</h3>
    <form method="POST">
        <label for="contacto">Nombre:</label>
        <input type="text" name="contacto" id="contacto" required>
        <br>
        <input type="submit" value="Buscar" name="buscar">
    </form>
    <br><br>
    <?php
        include("accesomongo.php");
        include("funciones.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["insertar"])) {
                insertar($collection, $_POST["name"], $_POST["tel"]);
                echo "Se ha añadido el contacto correctamente.";
            }
            else if (isset($_POST["mostrar"])) {
                $datos = mostrar($collection);
                echo "<table border='1'>
                <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                </tr>";
                foreach ($datos as $dato) {
                    $nombre = $dato['Nombre'];
                    $tel = $dato['Telefono'];
                    echo "<tr>
                    <td>$nombre</td>
                    <td>$tel</td>
                    </tr>";
                }
                echo "</table>";
            }
            else if (isset($_POST["buscar"])){
                $nombre = $_POST["contacto"];
                $dato = buscar($collection, $nombre);
                echo "<table border='1'>
                <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                </tr>";
                foreach($dato as $datos){
                    $name = $datos['Nombre'];
                    $tel = $datos['Telefono'];
                    echo "<tr>
                    <td>$name</td>
                    <td>$tel</td>
                    </tr>";    
                }
                echo "</table>";
            }    
        }    
    ?>    
</body>
</html>
