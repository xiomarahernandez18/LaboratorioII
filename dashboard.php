<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "Correo inválido.";
    } elseif (!is_numeric($edad)) {
        echo "Edad inválida.";
    } else {
        $stmt = $conn->prepare("INSERT INTO datos (nombre, correo, edad) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $nombre, $correo, $edad);
        if ($stmt->execute()) {
            echo "Datos guardados correctamente.";
        } else {
            echo "Error al guardar.";
        }
    }
}
?>


    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Panel de Datos</h1>
    <form method="POST" action="">
        Nombre: <input type="text" name="nombre" required><br>
        Correo: <input type="email" name="correo" required><br>
        Edad: <input type="number" name="edad" required><br>
        <button type="submit">Guardar</button>
    </form>
    <nav>
        <a href="ver_datos.php">Ver datos</a> |
        <a href="pdf.php">Respuestas PDF</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Panel de Datos</h1>
    <form method="POST" action="">
        Nombre: <input type="text" name="nombre" required><br>
        Correo: <input type="email" name="correo" required><br>
        Edad: <input type="number" name="edad" required><br>
        <button type="submit">Guardar</button>
    </form>
    <nav>
        <a href="ver_datos.php">Ver datos</a> |
        <a href="pdf.php">Respuestas PDF</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Panel de Datos</h1>
    <form method="POST" action="">
        Nombre: <input type="text" name="nombre" required><br>
        Correo: <input type="email" name="correo" required><br>
        Edad: <input type="number" name="edad" required><br>
        <button type="submit">Guardar</button>
    </form>
    <nav>
        <a href="ver_datos.php">Ver datos</a> |
        <a href="pdf.php">Respuestas PDF</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Panel de Datos</h1>
    <form method="POST" action="">
        Nombre: <input type="text" name="nombre" required><br>
        Correo: <input type="email" name="correo" required><br>
        Edad: <input type="number" name="edad" required><br>
        <button type="submit">Guardar</button>
    </form>
    <nav>
        <a href="ver_datos.php">Ver datos</a> |
        <a href="pdf.php">Respuestas PDF</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>


