<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $suma=(float)$_POST["suma"];
        $resultados = $num1 + $num2;
        $resultador = $num1 - $num2;
        $resultadod = $num1 / $num2;
        $resultadom = $num1 * $num2;
        if($suma == $resultados || $suma == $resultador || $suma == $resultadod || $suma == $resultadom){
            echo "El resultado es correcto. Enhorabuena!!";
            echo "<br><a href='cuadernillo.php'><input type='submit' value='Volver Atrás'></a>";
        }
        else{
            echo "El resultado es incorrecto.";
            echo "<br><input type='submit' value='Volver Atrás' onclick='history.go(-1);'>";
        }    
    ?>
</body>
</html>