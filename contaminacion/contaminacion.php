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
    <h1>Tabla de contaminación de Madrid</h1>
    <table>
        <?php
        $magnitudes = [
            1 => "Dióxido de Azufre",
            6 => "Monóxido de Nitrógeno",
            7 => "Monóxido de Nitrógeno",
            8 => "Dióxido de Nitrógeno",
            9 => "Partículas < 2.5 µm",
            10 => "Partículas < 10 µm",
            12 => "Óxidos de Nitrógeno",
            14 => "Ozono",
            20 => "Tolueno",
            30 => "Benceno",
            35 => "Etilbenceno",
            37 => "Metaxileno",
            38 => "Paraxileno",
            39 => "Ortoxileno",
            42 => "Hidrocarburos totales (hexano)",
            43 => "Metano",
            44 => "Hidrocarburos no metánicos (hexano)",
        ];
        $estaciones = [
            4 => "Pza. de España",
            8 => "Escuelas Aguirre",
            11 => "Av. Ramón y Cajal",
            16 => "Arturo Soria",
            17 => "Villaverde Alto",
            18 => "C/ Farolillo",
            24 => "Casa de Campo",
            27 => "Barajas",
            36 => "Moratalaz",
            38 => "Cuatro Caminos",
            39 => "Barrio del Pilar",
            40 => "Vallecas",
            47 => "Mendez Alvaro",
            48 => "Pº Castellana",
            49 => "Retiro",
            50 => "Plaza Castilla",
            54 => "Ensanche Vallecas",
            55 => "Urb Embajada (Barajas)",
            56 => "Plaza Elíptica",
            57 => "Sanchinarro",
            58 => "El Pardo",
            59 => "Juan Carlos I",
            60 => "Tres Olivos",
        ];
        $Magnitud = "MAGNITUDES";
        $Estacion = "ESTACIONES";
        $fichero = fopen("horario.csv", "r");
        $counter = 0;
        if ($fichero != false) {
            while (($linea = fgetcsv($fichero, 0, ";")) != false && $counter < 31) {
                $palabra = $linea;
                if (count($palabra)) {
                    echo "<tr>";
                    echo "<td>" , ($estaciones[$palabra[2]] ?? $Estacion) , "</td>";
                    echo "<td>" , ($magnitudes[$palabra[3]] ?? $Magnitud) , "</td>";
                    for ($i = 8; $i < count($palabra); $i += 2) {
                        echo "<td>{$palabra[$i]}</td>";
                    }
                    echo "</tr>";
                }
                $counter++;
            }
            fclose($fichero);
        }
        ?>
    </table>
</body>
</html>