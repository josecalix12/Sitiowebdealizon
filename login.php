<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
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
        }
        .login-container {
            background-color: rgba(255, 182, 193, 0.7); /* Cubo transparente con tono rosado */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(255, 105, 180, 0.4); /* Sombra rosa */
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1s ease-in-out;
        }
        .login-container h2 {
            color: #ff69b4; /* Rosa oscuro */
            margin-bottom: 20px;
        }
        .login-container h3 {
            color: #ff1493; /* Rosa intenso */
            margin-bottom: 10px;
            font-weight: bold;
        }
        .form-control {
            background-color: rgba(255, 255, 255, 0.8); /* Transparencia en inputs */
            color: #ff69b4; /* Texto en rosa oscuro */
            border: 1px solid #ff69b4; /* Borde rosa */
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
        }
        .btn-primary:hover {
            background-color: #ff1493; /* Color al pasar el ratón */
        }
        .btn-secondary {
            background-color: #ffc0cb; /* Botón rosa claro */
            border: none;
            color: #fff; /* Texto blanco */
            margin-top: 20px;
            animation: pulse 1s infinite alternate;
        }
        .btn-secondary:hover {
            background-color: #ff69b4; /* Color al pasar el ratón */
        }
        .logo {
            width: 80px; /* Ajusta el tamaño del logo */
            margin-bottom: 10px;
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
    <div class="login-container text-center">
        <!-- Logo de la empresa -->
        <img src="https://cdn-icons-png.freepik.com/512/21/21564.png" alt="Logo de la Empresa" class="logo">
        <!-- Título de la empresa -->
        <h3>THEBOOK</h3>
        <h2>Iniciar Sesión</h2>
        <!-- Formulario de inicio de sesión -->
        <form action="procesar_login.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="correo" name="correo" placeholder="ejemplo@gmail.com" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="más de 8 dígitos" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        </form>
        <!-- Mostrar el mensaje de error si existe -->
        <?php
        if(!empty($error_message)) {
            echo "<p style='color: red;'>$error_message</p>";
        }
        ?>
        <button class="btn btn-secondary btn-block" onclick="window.location.href='Registro.php'">Crear Cuenta</button>
    </div>
    
    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
