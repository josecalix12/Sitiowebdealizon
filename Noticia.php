<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias - THEBOOK</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgba(255, 192, 203, 0.9); /* Rosa claro con transparencia */
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            position: relative;
        }

        header h1 {
            color: #000;
            margin: 0;
            font-size: 2.5em;
        }

        .back-button {
            position: absolute;
            left: 20px;
            top: 20px;
            background-color: #ff69b4; /* Rosa intenso */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .back-button:hover {
            background-color: #ff1493; /* Rosa oscuro */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.7);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .news-item {
            background-color: rgba(255, 255, 255, 0.9); /* Blanco con transparencia */
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .news-item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .news-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
        }

        .news-item-content {
            padding: 20px;
        }

        .news-item h2 {
            color: #000;
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        .news-item p {
            color: #333;
            line-height: 1.6;
        }

        footer {
            background-color: rgba(255, 192, 203, 0.9); /* Rosa claro con transparencia */
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.5);
        }

        footer p {
            color: #000;
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Noticias de THEBOOK</h1>
        <a href="Inicio.php" class="back-button">Volver a Inicio</a>
    </header>

    <div class="container">
        <div class="news-grid">
            <div class="news-item">
                <img src="https://innovainternetmx.com/wp-content/uploads/app.jpeg" alt="Noticia 1">
                <div class="news-item-content">
                    <h2>THEBOOK lanza nueva aplicación de lectura</h2>
                    <p>THEBOOK ha anunciado el lanzamiento de su nueva aplicación de lectura, diseñada para mejorar la experiencia de los usuarios con características innovadoras.</p>
                </div>
            </div>
            <div class="news-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRfRwOAovKfcbkG14Spj_-BftK6xL4xY2X4Q&s" alt="Noticia 2">
                <div class="news-item-content">
                    <h2>Actualización importante en la plataforma THEBOOK</h2>
                    <p>La plataforma THEBOOK recibe una actualización importante que incluye nuevas funciones y mejoras en la interfaz de usuario para facilitar la navegación.</p>
                </div>
            </div>
            <div class="news-item">
                <img src="https://pymesworld.com/wp-content/uploads/2020/12/Publicidad-para-vender-un-libro.jpg" alt="Noticia 3">
                <div class="news-item-content">
                    <h2>THEBOOK adquiere derechos de publicación exclusivos</h2>
                    <p>THEBOOK ha adquirido derechos de publicación exclusivos para varios títulos importantes, ampliando su catálogo de libros y recursos para los usuarios.</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 THEBOOK. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
