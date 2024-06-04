<?php
namespace App\controllers;

include_once 'databases/conexionDbController.php';

use App\controllers\databases\conexionDbController;

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $password = $_POST["pwd"];

    $conexionDBController = new ConexionDBController();
    $conex = $conexionDBController->getConexion();
    $usuario = $conex->real_escape_string($usuario);
    $password = $conex->real_escape_string($password);

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND pwd='$password'";
    $resultado = $conexionDBController->execSql($sql);

    if ($resultado && $resultado->num_rows == 1) {
        $_SESSION["usuario"] = $usuario;
        header("Location: ../Views/informacionCliente.php");
        exit();
    } else {
        $_SESSION["error_message"] = "Usuario o contraseña incorrectos";
        header("Location: ../Views/inicioSesion.html");
        exit();
    }
}


