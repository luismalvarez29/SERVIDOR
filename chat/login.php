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
        .text{
            color: green;
        }
        .error{
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
        if(isset($_SESSION['error'])){
            $error = $_SESSION['error'];
            unset($_SESSION['error']);
        }
        else {
            $error = "";
        }
    ?>
    <h2>Iniciar sesión</h2>
    <?php
        if($text != ""){
            echo "<p class='text'>$text</p>";
        }
        if($error != ""){
            echo "<p class='error'>$error</p>";
        }
    ?>
    <form  method = "POST" action = "check.php">
        <input type="text" name="usr" placeholder="Usuario" required>
        <br>
        <br>
        <input type="password" name="pwd" placeholder="Contraseña" required>
        <br>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <br>
    <a href="signup.php">Crear cuenta</a>
</body>
</html>