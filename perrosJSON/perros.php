<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $url = "https://dog.ceo/api/breeds/image/random";
        $solicitud = file_get_contents($url);
        $datos = json_decode($solicitud, true);
        $imagenURL = $datos['message'];
        echo "<img src='$imagenURL' alt='Random Dog'>";
    ?>
</body>
</html>