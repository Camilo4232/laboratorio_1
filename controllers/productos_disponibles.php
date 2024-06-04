<?php

include_once 'databases/ConexionDBController.php';

$conexionDBController = new \App\controllers\databases\ConexionDBController();

$sql = "SELECT * FROM articulos";

$resultado = $conexionDBController->execSql($sql);

$productos = array();

if ($resultado && $resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $productos[] = $fila;
    }
}

$conexionDBController->close();

return $productos;

