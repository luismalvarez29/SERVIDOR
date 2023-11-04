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
        p{
            color: red;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['texto'])){
            $text = $_SESSION['texto'];
            unset($_SESSION['texto']);
        }
        else {
            $text = "";
        }
    ?>
    <h2>Crear cuenta</h2>
    <?php
        if($text != ""){
            echo "<p>$text</p>";
        }
    ?>
    <form  method = "POST" action = "save.php">
        <input type="text" name="usr" placeholder="Usuario" required>
        <br>
        <br>
        <input type="password" name="pwd" placeholder="Contraseña" required>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <a href="login.php">Iniciar sesión</a>
</body>
</html>