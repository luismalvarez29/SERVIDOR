<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, tr{
            border: black solid;
        }
    </style>
</head>
<body>
    <?php
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $telefono = $_POST["telefono"];
        $fichero = fopen("agenda.csv", "a");
        $txt = "$nombre, $apellido, $telefono\n";
        fwrite($fichero, $txt);
        fclose($fichero);
    ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
        </tr>
        <?php
            $fichero = fopen("agenda.csv", "r");
            while (($datos = fgetcsv($fichero, 1000, ","))) {
                echo "<tr>";
                foreach ($datos as $dato) {
                    echo "<td>$dato</td>";
                }
                echo "</tr>";
            }
            fclose($fichero);
        ?>
    </table>
    <?php
        echo "<br><input type='submit' value='Añadir otro contacto' onclick='history.go(-1);'>";
    ?>
</body>
</html>