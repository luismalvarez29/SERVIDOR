<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $fichero = fopen("usuarios.csv", "r");
        $usr = $_POST["usr"];
        $pwd = $_POST["pwd"];
        $_SESSION["usr"] = $usr;
        $log = false;
        while(!feof($fichero)){
            $linea = fgets($fichero);
            $palabra = explode(",", $linea);
            if(count($palabra) >= 2){
                if($usr == ($palabra[0]) && $pwd == ($palabra[1])){
                    $log = true;
                    break;
                }
            }
        }
        fclose($fichero);
        if($log){
            header('Location: chat.php');
        }
        else{
            $_SESSION['error'] = "Usuario o contraseña incorrectos";
            header('Location: login.php');
        }
    ?>
</body>
</html>