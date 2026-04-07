<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario=?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($contraseña, $row['contraseña'])) {
            $_SESSION['usuario'] = $usuario;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Login de Usuarios</h1>
    <form method="POST" action="">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="contraseña" required><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Login de Usuarios</h1>
    <form method="POST" action="">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="contraseña" required><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Login de Usuarios</h1>
    <form method="POST" action="">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="contraseña" required><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Login de Usuarios</h1>
    <form method="POST" action="">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="contraseña" required><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Login de Usuarios</h1>
    <form method="POST" action="">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="contraseña" required><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>