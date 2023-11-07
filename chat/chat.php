<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: lightblue;
        }
        .text{
            text-align: center;
        }
        a{
            margin-left: 350px;
            margin-top: 0px;
        }
        textarea{
            width: 300px;
            height: 150px;
        }
        .mensaje{
            margin-left: 400px;
            width: 50%;
            padding-left: 5px;
        }
    </style>
</head>
<body>
    <?php
        echo "<div class='text'>
        <h1>CHAT PHP</h1>";
        session_start();
        $usr = $_SESSION["usr"];
        echo "<p>Bienvenido <b>$usr</b><a href='login.php' onclick='logOut()'>Cerrar sesión</a></p>
        <br>
        <form action='saveChat.php' method='POST'>
        <textarea name='men' placeholder='Mensaje'></textarea>";
        $date = date('d-m-Y');
        $hour = date('H:i:s');
        echo "<input type='text' name='date' value='Dia: $date Hora: $hour' hidden>
        <br>
        <br>
        <input type='submit' value='Enviar'>
        </form>";
        echo "</div>";
        echo "<div class='mensaje'>
        <h3>Mensajes</h3>";
        $file = fopen("mensajes.csv", "r");
        while(!feof($file)){
            $line = fgets($file);
            $word = explode(",", $line);
            if(count($word) >= 3){
                echo "<br>
                <b>Usuario: </b>";
                echo $word[0];
                echo "<br>
                <b>Fecha: </b>";
                echo $word[1];
                echo "<br>
                <b>Mensaje: </b>";
                echo $word[2];
                echo "<br>";
            }
        }
        fclose($file);
        echo "</div>";
    ?>
</body>
</html>
