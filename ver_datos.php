<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
include("conexion.php");

$result = $conn->query("SELECT * FROM datos ORDER BY nombre ASC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Datos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Datos Registrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['edad']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <nav>
        <a href="dashboard.php">Ingresar datos</a> |
        <a href="logout.php">Cerrar sesión</a>
    </nav>
</body>
</html>

