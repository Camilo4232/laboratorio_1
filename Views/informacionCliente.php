<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Cliente</title>
    <link rel="stylesheet" href="../Views/CSS/seleccion_productos.css">
</head>
<body>
    <header>
        <h2>Información del Cliente</h2>
    </header>
    <main>
        <section class="form-container">
            <form action="../controller/procesarCliente.php" method="POST">
                <div class="form-group">
                    <label for="nombreCompleto">Nombre Completo:</label>
                    <input type="text" id="nombreCompleto" name="nombreCompleto" required>
                </div><br>

                <div class="form-group">
                    <label for="tipoDocumento">Tipo de Documento:</label>
                    <select id="tipoDocumento" name="tipoDocumento" required>
                        <option value="CC">Cédula de Ciudadanía</option>
                        <option value="CE">Cédula de Extranjería</option>
                        <option value="NIT">NIT</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div><br>

                <div class="form-group">
                    <label for="numeroDocumento">Número de Documento:</label>
                    <input type="text" id="numeroDocumento" name="numeroDocumento" required>
                </div><br>

                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" required>
                </div><br>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div><br>

                <button type="submit">Continuar</button>
            </form>
        </section>
    </main>
</body>
</html>

