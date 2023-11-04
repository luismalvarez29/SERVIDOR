<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $url = "https://restcountries.com/v3.1/all";
    $solicitud = file_get_contents($url);
    $paises = json_decode($solicitud, true);
    echo "<table border='1'>
    <tr>
        <th>País</th>
        <th>Capital</th>
        <th>Google Maps</th>
    </tr>";
    foreach ($paises as $pais) {
        $nomPais = $pais['name']['common'];
        $capital = isset($pais['capital'][0]) ? $pais['capital'][0] : 'No disponible';        
        $link = "https://www.google.com/maps/place/$capital";
        echo "<tr>
                <td>$nomPais</td>
                <td>$capital</td>
                <td><a href='$link' target='_blank'>Ver en Google Maps</a></td>
                </tr>";
    }
    echo "</table>";
?>
</body>
</html>
