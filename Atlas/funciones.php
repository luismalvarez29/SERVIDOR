<?php
    include("accesomongo.php");
    function insertar($collection, $nombre, $tel){
        $insert = $collection->insertOne([
            'Nombre' => $nombre,
            'Telefono' => $tel,
        ]);
    }
    function mostrar($collection){
        $resultado = $collection->find();
        foreach ($resultado as $documento) {
            $datos[] = [
                'Nombre' => $documento['Nombre'],
                'Telefono' => $documento['Telefono']
            ];
        }
        return $datos;
    }
    function buscar($collection, $nombre){
        $document = $collection->find(['Nombre' => $nombre]);
        return $document;
    }
?>