<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Libros - THEBOOK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ffcccb; /* Fondo rosado claro */
            display: flex;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo negro con transparencia */
            padding: 20px;
            border-radius: 10px;
            width: 80px; /* Ancho fijo para la barra de navegación */
            height: 100vh; /* Altura completa de la ventana */
            position: fixed; /* Fija la barra de navegación en el lado izquierdo */
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Sombra para la barra de navegación */
        }

        .navbar img {
            margin-bottom: 20px;
            width: 40px; /* Tamaño de los íconos */
            height: auto;
        }

        .container {
            margin-left: 100px; /* Espacio para la barra de navegación */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con transparencia */
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); /* Sombra para el contenedor */
            width: calc(100% - 120px); /* Ajuste para el espacio de la barra de navegación */
        }

        .logo {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }

        .header {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 3em;
            color: #000;
            font-weight: bold;
        }

        .content {
            text-align: center;
            margin-top: 20px;
        }

        .content img {
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Sombra para las imágenes */
            margin-bottom: 20px;
        }

        .content p {
            font-size: 1.2em;
            color: #333;
        }

        .info-section {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo negro con transparencia */
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 20px;
            color: #fff;
            text-align: center;
        }

        .info-section h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .info-section p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .btn-buy {
            background-color: #ffcccb; /* Fondo rosado */
            color: #000;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            text-transform: uppercase;
        }

        .btn-buy:hover {
            background-color: #000; /* Fondo negro */
            color: #fff; /* Texto blanco */
        }

        @media (max-width: 768px) {
            .container {
                margin-left: 0;
                width: 100%;
            }

            .navbar {
                width: 100%;
                height: auto;
                flex-direction: row;
                justify-content: space-around;
                position: relative;
            }

            .navbar img {
                width: 30px; /* Ajusta el tamaño de los íconos en dispositivos móviles */
            }

            .header h1 {
                font-size: 2.5em;
            }

            .info-section h2 {
                font-size: 2em;
            }

            .info-section p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="Inicio.php"><img src="https://cdn.icon-icons.com/icons2/1673/PNG/512/homeoutline_110882.png" alt="Inicio" title="Inicio"></a>
        <a href="shop.php"><img src="https://cdn-icons-png.freepik.com/512/5320/5320513.png" alt="Libros" title="Libros"></a>
        <a href="Sobrenosotro.php"><img src="https://cdn-icons-png.flaticon.com/512/4906/4906519.png" alt="Sobre Nosotros" title="Sobre Nosotros"></a>
        <a href="Noticia.php"><img src="https://cdn.icon-icons.com/icons2/430/PNG/512/news27_42521.png" alt="Noticias" title="Noticias de los Libros"></a>
        <a href="Contacto.php"><img src="https://cdn-icons-png.flaticon.com/512/2903/2903622.png" alt="Contacto" title="Contacto"></a>
        <a href="login.php"><img src="https://www.shareicon.net/data/2015/12/09/685026_arrow_512x512.png" alt="Cerrar" title="Cerrar Sección"></a>
    </div>

    <div class="container">
        <div class="header">
            <img src="https://cdn-icons-png.freepik.com/512/21/21564.png" alt="Logo de THEBOOK" class="logo">
            <h1>THEBOOK</h1>
        </div>

        <div class="content">
            <p>Bienvenido a THEBOOK, tu tienda en línea para los mejores libros.</p>
            <img src="https://www.shbarcelona.es/blog/es/wp-content/uploads/2017/05/tienda-de-libros-1-810x568.jpg" alt="Imagen de la tienda de libros">
        </div>

        <div class="info-section">
            <h2>Nuestros Libros</h2>
            <p>Descubre nuestra amplia colección de libros de todos los géneros. ¡Ofertas exclusivas por tiempo limitado!</p>
            <button class="btn-buy" onclick="location.href='shop.php'">Shoping</button>
        </div>

        <div class="info-section">
            <h2>Atención Personalizada</h2>
            <p>Si deseas comprar un libro puedes contactarnos en el apartado de contactos donde te daremos las indicaciones de la compra de tu libro Favorito</p>
        </div>
    </div>

</body>

</html>
