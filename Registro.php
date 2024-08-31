<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario - THEBOOK</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffebef; /* Fondo rosado claro */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.7); /* Fondo blanco con transparencia */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(255, 105, 180, 0.4); /* Sombra rosa */
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1s ease-in-out;
            text-align: center;
        }
        .form-container img {
            width: 100px;
            margin-bottom: 20px;
        }
        .form-container h2 {
            color: #ff69b4; /* Rosa oscuro */
            margin-bottom: 30px;
            font-size: 1.8em;
        }
        .form-control {
            background-color: rgba(255, 255, 255, 0.8); /* Transparencia en inputs */
            color: #ff69b4; /* Texto en rosa oscuro */
            border: 1px solid #ff69b4; /* Borde rosa */
            border-radius: 8px; /* Borde redondeado */
            margin-bottom: 20px; /* Espacio entre campos */
            padding: 10px;
            font-size: 1.1em;
        }
        .form-control::placeholder {
            color: #ffb6c1; /* Placeholder rosado claro */
        }
        .btn-primary {
            background-color: #ff69b4; /* Botón rosa oscuro */
            border: none;
            color: #fff; /* Texto blanco */
            transition: background-color 0.3s;
            animation: pulse 1s infinite alternate;
            border-radius: 8px; /* Borde redondeado */
            width: 100%;
            padding: 12px;
            font-size: 1.2em;
            margin-top: 10px;
        }
        .btn-primary:hover {
            background-color: #ff1493; /* Color al pasar el ratón */
        }
        a {
            color: #ff69b4; /* Color rosa para el enlace */
            text-decoration: none;
            font-size: 1.1em;
            transition: color 0.3s;
        }
        a:hover {
            color: #ff1493; /* Color rosa oscuro al pasar el ratón */
        }
        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.05);
            }
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <img src="https://cdn-icons-png.freepik.com/512/21/21564.png" alt="Logo"> <!-- Imagen de ejemplo -->
        <h2>Registrarse en THEBOOK</h2>
        <form action="agregar_usuario.php" method="post">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required>
            <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
            <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
            <input type="submit" class="btn btn-primary" value="Agregar Usuario">
        </form>
        <br>
        <a href="login.php">Iniciar Sesión en THEBOOK</a>
    </div>
    <!-- Bootstrap JS (Opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
