<?php
// Incluir el archivo de conexión
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$database = "ali";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $database);

// Verificar la conexión
if (!$conexion) {
    die("Error al conectarse: " . mysqli_connect_error());
}

// Inicializar variables
$mensaje = '';
$nombreLibro = '';

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    // Consultar si el usuario existe
    $sql = "SELECT * FROM Usuarios WHERE nombre = ? AND contrasena = ?";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, 'ss', $nombre, $contrasena);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) > 0) {
        // Definir el nombre del libro
        $nombreLibro = 'Matar a un Ruiseñor.txt'; // Nombre del archivo a descargar

        // Generar el archivo .txt
        $fileContent = "Nombre del Libro: Matar a un Ruiseñor\n";
        $filePath = 'downloads/' . $nombreLibro;
        file_put_contents($filePath, $fileContent);

        // Descargar el archivo
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $nombreLibro . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        $mensaje = "Se cancela la Compra.Usuario o Contraseña Incorrecta.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto - JnCodes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #fce4ec, #f8bbd0); /* Degradado rosa claro */
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar {
            background: rgba(255, 20, 147, 0.9); /* Rosa fuerte con transparencia */
            padding: 15px;
            color: #fff;
            position: fixed;
            width: 80px;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar img {
            width: 40px;
            height: auto;
            margin: 10px 0;
            transition: opacity 0.3s;
        }

        .navbar img:hover {
            opacity: 0.7;
        }

        .product-container {
            margin-left: 100px; /* Espacio para la barra de navegación */
            background: rgba(255, 255, 255, 0.9); /* Fondo blanco con transparencia */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            margin: 20px auto;
            text-align: center;
        }

        .product-container img {
            max-width: 100%;
            border-radius: 8px;
        }

        .product-container h1 {
            margin: 20px 0;
            color: #d81b60; /* Rosa fuerte */
        }

        .product-container h2 {
            margin: 10px 0;
            color: #d81b60; /* Rosa fuerte */
        }

        .product-container p {
            color: #d81b60; /* Rosa fuerte */
        }

        .product-container button {
            padding: 10px 20px;
            background-color: #d81b60; /* Rosa fuerte */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .product-container button:hover {
            background-color: #c2185b; /* Rosa más oscuro al pasar el ratón */
        }

        .message {
            margin-top: 20px;
            font-size: 16px;
        }

        .message.success {
            color: #d81b60; /* Rosa fuerte para el mensaje de éxito */
        }

        .message.error {
            color: #d32f2f; /* Rojo para el mensaje de error */
        }

        .form-container {
            margin-top: 20px;
        }

        .form-container input {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: calc(100% - 22px);
            box-sizing: border-box;
        }

        @media (max-width: 600px) {
            .product-container {
                padding: 15px;
            }

            .product-container button {
                font-size: 14px;
                padding: 8px 16px;
            }

            .form-container input {
                padding: 8px;
            }
            .navbar {
                width: 100%;
                height: auto;
                flex-direction: row;
                justify-content: space-around;
                position: relative;
            }

            .navbar img {
                width: 30px;
            }

        }
    </style>
</head>

<body>

    <div class="product-container">
        <h1>Matar a un Ruiseñor</h1>
        <img src="https://media.revistaad.es/photos/60c227359ae22619e08751b2/master/w_1600%2Cc_limit/247747.jpg" alt="Imagen del Producto">
        <h2>Productos de TheBook</h2>
        <p>Libros Digitales con un simple click.</p>

        <!-- Formulario de compra -->
        <form method="post" class="form-container">
            <input type="text" name="nombre" placeholder="Nombre de Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Comprar</button>
        </form>

        <!-- Mostrar mensaje -->
        <div class="message">
            <?php
            if (isset($mensaje)) {
                echo $mensaje;
            }
            ?>
        </div>
    </div>
</body>

</html>
