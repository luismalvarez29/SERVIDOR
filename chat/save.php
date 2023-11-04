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
        $usr = $_POST["usr"];
        $password = $_POST["pwd"];
        $userC = true;
        $fichero = fopen("usuarios.csv", "r");
        if($fichero){
            while(($datos = fgets($fichero)) != false){
                $linea = explode(",", $datos);
                if(count($linea) == 2){
                    $oldUsr = $linea[0];
                    if($usr == $oldUsr){
                        $userC = false;
                        break;
                    }
                }
            }
        }
        fclose($fichero);
        if($userC){
            $fichero2 = fopen("usuarios.csv", "a");
            fwrite($fichero2, "$usr, $password \n");
            fclose($fichero2); 
            $_SESSION['texto'] = "Te has registrado correctamente!";   
            header('Location: login.php');
        }
        else{
            $_SESSION['texto'] = "El usuario que has introducido ya existe.";
            header('Location: signup.php');
        }
    ?>
</body>
</html>