<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fichero = fopen("agenda.csv", "w");
        $txt1 = "Pepe, Perez, 688978456\n";
        fwrite($fichero, $txt1);
        $txt2 = "Ana, Gonzalez, 622325447\n";
        fwrite($fichero, $txt2);
        fclose($fichero);
        echo "Añade un nuevo contacto a la agenda";
    ?>
    <br>
    <form method="post" action="agenda2.php">
        <label for="nom">Nombre :</label>
        <input type="text" name="nombre" id="nom" placeholder="Nombre">
        <br>
        <label for="ape">Apellido :</label>
        <input type="text" name="apellido" id="ape" placeholder="Apellido">
        <br>
        <label for="tel">Teléfono :</label>
        <input type="number" name="telefono" id="tel" placeholder="Telefono">
        <br>
        <input type="submit">
    </form>
</body>
</html>