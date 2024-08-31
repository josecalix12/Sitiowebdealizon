<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - THEBOOK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fce4ec; /* Rosa claro */
            color: #880e4f; /* Rosa oscuro */
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            perspective: 1000px;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con transparencia */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1s ease-in-out;
            text-align: center;
        }

        h1 {
            color: #880e4f; /* Rosa oscuro para el título */
            text-align: center;
            margin-bottom: 20px;
        }

        .info {
            margin-bottom: 30px;
            padding: 20px;
            background-color: rgba(255, 182, 193, 0.2); /* Rosa claro con transparencia */
            border-radius: 8px;
        }

        .info h2 {
            color: #880e4f; /* Rosa oscuro para el subtítulo */
            margin-bottom: 10px;
        }

        .info p {
            margin: 10px 0;
            line-height: 1.6;
        }

        .social-media {
            display: flex;
            justify-content: center;
            gap: 30px; /* Espacio aumentado entre los íconos */
            margin-bottom: 30px; /* Espacio adicional debajo de los íconos */
        }

        .social-media a {
            display: block;
            width: 60px;
            height: 60px;
        }

        .social-media img {
            width: 100%;
            height: 100%;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .social-media img:hover {
            transform: scale(1.1);
        }

        .back-button {
            margin-top: 30px; /* Espacio aumentado entre los íconos y el botón */
            padding: 10px 20px;
            background-color: #880e4f; /* Rosa oscuro para el botón */
            color: #fff;
            border: 2px solid #880e4f; /* Rosa oscuro para el borde */
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .back-button:hover {
            background-color: #fff; /* Blanco para el fondo al pasar el ratón */
            color: #880e4f; /* Rosa oscuro para el texto al pasar el ratón */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contacto - THEBOOK</h1>
        <div class="info">
            <h2>Información de la Empresa</h2>
            <p><strong>Nombre:</strong> THEBOOK</p>
            <p><strong>Fecha de Fundación:</strong> 1 de enero de 2024</p>
            <p><strong>Enfoque:</strong> Venta de libros y literatura</p>
            <p><strong>Dirección:</strong> Calle Ejemplo 456, Ciudad Ejemplo</p>
            <p><strong>Teléfono:</strong> +1 234 567 8901</p>
            <p><strong>Email:</strong> TheBook@thebook.com</p>
        </div>
        <div class="social-media">
            <a href="https://www.facebook.com/tu-pagina" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
            </a>
            <a href="https://wa.me/1234567890" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
            </a>
            <a href="https://www.instagram.com/tu-pagina" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
            </a>
        </div>
        <a href="javascript:history.back()" class="back-button">Regresar</a>
    </div>
</body>
</html>
