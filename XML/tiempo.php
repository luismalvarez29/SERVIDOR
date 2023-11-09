<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Elegir una localidad para ver el tiempo</h1>
    <form method="POST">
        <select name="tiempo" id="tiempo">
            <option value="seleccion">Seleccione una opción</option>
            <option value="Alcorcon">Alcorcón</option>
            <option value="Leganes">Leganés</option>
            <option value="Mostoles">Móstoles</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Ver">
    </form>
    <?php
        $ciudades = [
            'Alcorcon' => 'https://www.aemet.es/xml/municipios/localidad_28007.xml',
            'Leganes' => 'https://www.aemet.es/xml/municipios/localidad_28074.xml',
            'Mostoles' => 'https://www.aemet.es/xml/municipios/localidad_28092.xml'
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ciudad = $_POST['tiempo'];
            if (array_key_exists($ciudad, $ciudades)) {
                $url = $ciudades[$ciudad];
                $xml = simplexml_load_file($url);
                $predict = $xml->prediccion->dia;
                for($i = 0; $i < count($predict); $i++){
                    $dia = $predict[$i];
                    $fecha = $dia['fecha'];
                    $tempMin = $dia->temperatura->minima;
                    $tempMax = $dia->temperatura->maxima;
                    echo "<br><table border='1'>
                            <tr>
                                <th>Ciudad</th>
                                <th>Fecha</th>
                                <th>Temperatura Mínima</th>
                                <th>Temperatura Máxima</th>
                            </tr>
                            <tr>
                                <td>$ciudad</td>
                                <td>$fecha</td>
                                <td>$tempMin</td>
                                <td>$tempMax</td>
                            </tr>
                        </table>";    
                }
            }
        }
    ?>
</body>
</html>