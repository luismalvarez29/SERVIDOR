<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $contacto = [
            ['Nombre' => 'Pedro', 'Telefono' => '647849561'],
            ['Nombre' => 'Juan', 'Telefono' => '624971432'],
            ['Nombre' => 'Jesus', 'Telefono' => '634847598']
        ];
        $file = fopen("contacto.csv", "w");
        foreach ($contacto as $contactos) {
            fputcsv($file, $contactos);
        }        
        fclose($file);
        echo json_encode(['Contactos' => $contacto]);
    ?>
</body>
</html>