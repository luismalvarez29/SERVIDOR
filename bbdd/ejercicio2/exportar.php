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
    <h1>Exportar datos</h1>
    <h3>CSV</h3>
    <form method="POST">
        <input type="submit" value="Exportar" name="csv">
    </form>
    <h3>MYSQL</h3>
    <form method="POST">
        <input type="submit" value="Exportar" name="mysql">
    </form>
    <?php
        $connection = include("../ejercicio1/bbdd.php");
        include("functions.php");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["csv"])){
                exportarCSV($connection);
            } else if (isset($_POST["mysql"])){
                exportarMYSQL($connection);
            }
        }     
    ?>
</body>
</html>