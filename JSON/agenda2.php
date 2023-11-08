<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th{
            border: solid black;
        }
    </style>
</head>
<body>
    <?php
        if (($file = fopen("agenda.csv", "r")) != false) {
            echo "<table>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
            </tr>";
            while (($datos = fgetcsv($file, 1000, ",")) != false) {
                echo "<tr>";
                foreach ($datos as $dato) {
                    echo "<td>$dato</td>";
                }
                echo "</tr>";
            }
            fclose($file);
            echo "</table>";
        }
    ?>
</body>
</html>