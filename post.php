<?php
    require("./conexion.php");
    $data = json_decode(file_get_contents('php//input'), true);
    $destino = $data['Destino'];
    $salida = $data['Salida'];
    $precio = $data['Precio'];
    $duracion = $data['Duracion'];

    $conexion = new Conexion();
    $db = $conexion->getConexion();
    $query = "INSERT INTO internacionales (Destino, Salida, Precio, Duracion) VALUES (:destino,:salida,:precio,:duracion)";
    $statement = $db->prepare($query);
    $statement->bindParam(":destino", $destino);
    $statement->bindParam(":salida", $salida);
    $statement->bindParam(":precio", $precio);
    $statement->bindParam(":duracion", $duracion);
    $result = $statement->execute();
    if($result){
        return "successfully";
    }
        return "error";
?>
