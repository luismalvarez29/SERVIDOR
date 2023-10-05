<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cuadernillo2.php" method="post">
        <?php
        $num1 = rand(1, 100); 
        $num2 = rand(1, 100); 
        $num3 = rand(1, 4);
        ?>
        <label for="op"><?php 
        if($num3 == 1){
            echo "$num1 + $num2"; 
            $result = $num1 + $num2; 
        }
        else if($num3 == 2){
            echo "$num1 - $num2";
            $result = $num1 - $num2; 
        }
        else if($num3 == 3){
            echo "$num1 / $num2";
            $result = $num1 / $num2; 
        }
        else{
            echo "$num1 * $num2";
            $result = $num1 * $num2; 
        }
        ?></label>
        <input id="op" type="hidden" name="num1" value="<?php echo $num1; ?>">
        <input id="op" type="hidden" name="num2" value="<?php echo $num2; ?>">
        <input id="op" type="number" name="suma" step="any">
        <br>
        <br>
        <input type="submit">
    </form></body>
</html>