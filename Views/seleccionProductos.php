<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Productos</title>
    <link rel="stylesheet" href="../Views/CSS/seleccionProductos.css">
</head>
<body>
    <h2>Selección de Productos</h2>
    <form action="../controllers/procesarCompra.php" method="POST">
        <?php
        $nombreCompleto = htmlspecialchars($_GET['nombreCompleto'] ?? '');
        $tipoDocumento = htmlspecialchars($_GET['tipoDocumento'] ?? '');
        $numeroDocumento = htmlspecialchars($_GET['numeroDocumento'] ?? '');
        $telefono = htmlspecialchars($_GET['telefono'] ?? '');
        $email = htmlspecialchars($_GET['email'] ?? '');
        ?>
        <input type="hidden" name="nombreCompleto" value="<?php echo $nombreCompleto; ?>">
        <input type="hidden" name="tipoDocumento" value="<?php echo $tipoDocumento; ?>">
        <input type="hidden" name="numeroDocumento" value="<?php echo $numeroDocumento; ?>">
        <input type="hidden" name="telefono" value="<?php echo $telefono; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">

        <h3>Productos</h3>
        <?php
        $productos = include '../controller/productosDisponibles.php';

        if (!empty($productos)) {
            foreach ($productos as $producto) {
                echo '<div class="product">';
                echo '<label for="producto' . htmlspecialchars($producto['id']) . '">' . htmlspecialchars($producto['nombre']) . ' ($' . htmlspecialchars($producto['precio']) . ')</label>';
                echo '<input type="number" id="producto' . htmlspecialchars($producto['id']) . '" name="producto' . htmlspecialchars($producto['id']) . '" min="0" step="1">';
                echo '</div>';
            }
        } else {
            echo '<p>No hay productos disponibles en este momento.</p>';
        }
        ?>
        <button type="submit">Continuar</button>
    </form>
</body>
</html>
