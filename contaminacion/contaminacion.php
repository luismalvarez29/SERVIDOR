<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: black solid;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $fichero = fopen("horario.csv", "r");
            $contador = 0;
            while (($linea = fgetcsv($fichero)) && $contador < 6) {
                echo "<tr>";
                foreach($linea as $lineas){
                    $palabra = explode(';', $lineas);
                    foreach($palabra as $palabras){
                        echo "<td>$palabras\n</td>";
                    }
                }
                $contador++;
                echo "</tr>";
            }
            fclose($fichero);
        ?>
    </table>
</body>
</html>