<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Cookies para tiendas</h1>
    <?php
        $cookie = isset($_COOKIE["ropa"]) ? $_COOKIE["ropa"] : "";
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ropa"])){
            $select = isset($_POST["ropa"]) ? $_POST["ropa"] : "";
            setcookie("ropa", $select, time() + 1800);
            $cookie = $select;
        }
        echo "<form action='cookies.php' method='POST'>
            <select name='ropa' id='ropa'>
                <option value='seleccion'>Seleccione una opción</option>
                <option value='Camiseta'>Camiseta</option>
                <option value='Pantalon'>Pantalon</option>
            </select>
            <br>
            <br>
            <input type='submit' value='Enviar'>
        </form>";
        if (!empty($cookie)) {
            if (($file = fopen("articulos.csv", "r")) != false) {
                while (($datos = fgetcsv($file, 1000, ",")) != false) {
                    $prenda = $datos[0];
                    $talla = $datos[1];
                    $color = $datos[2];
                    if ($prenda == $cookie) {
                        echo "<br>$prenda, $talla, $color<br>";
                    }    
            }
                fclose($file);
            }
        }    
    ?>
</body>
</html>
