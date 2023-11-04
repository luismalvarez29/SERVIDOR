<?php
    session_start();
    $usr = $_SESSION["usr"];
    $date = $_POST["date"];
    $men = $_POST["men"];
    $file = fopen("mensajes.csv", "a");
    $line = "$usr, $date, $men \n";
    fwrite($file, $line);
    fclose($file);
    header('Location: chat.php');
?>