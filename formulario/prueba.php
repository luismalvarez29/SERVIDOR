<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $color=$_GET["color"];
    echo "<style>
    div{background-color: $color};
    </style>";
    ?>
</head>
<body>
<?php
    $nombre=$_GET["nombre"];
    $edad=$_GET["edad"];
    $sexo=$_GET["sexo"];
    echo "Te llamas $nombre, tienes $edad años eres de género $sexo";
    echo "<div>Tu color favorito es</div>";
    ?>
</body>
</html>