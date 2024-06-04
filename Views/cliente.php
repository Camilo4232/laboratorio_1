<?php

include_once '../controller/databases/ConexionDBController.php';

$conexionDBController = new \App\controllers\databases\ConexionDBController();

if ($conexionDBController) {
    function obtenerClientes($conexion) {
        $query = "SELECT id, nombre FROM clientes";
        $statement = $conexion->getConexion()->prepare($query);
        $statement->execute();
        $result = $statement->get_result();
        $clientes = [];
        while ($row = $result->fetch_assoc()) {
            $clientes[] = $row;
        }
        return $clientes;
    }

    $clientes = obtenerClientes($conexionDBController);
    ?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Clientes</title>
        <link rel="stylesheet" href="CSS/estilos.css">
    </head>
    <body>
    <h1>Lista de Clientes</h1>
    <ul>
        <?php foreach ($clientes as $cliente): ?>
            <li><a href="consultar_facturas.php?id_cliente=<?= $cliente['id'] ?>"><?= $cliente['nombre'] ?></a></li>
        <?php endforeach; ?>
    </ul>
    </body>
    </html>

<?php } else {
    echo "No se pudo conectar a la base de datos.";
} ?>
