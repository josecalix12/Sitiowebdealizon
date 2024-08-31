<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Libros - THEBOOK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #f0f8ff, #e6e6e6); /* Fondo degradado */
        }

        .navbar {
            background: rgba(0, 0, 0, 0.6); /* Fondo negro con transparencia */
            padding: 20px;
            border-radius: 10px;
            width: 80px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .navbar img {
            width: 40px;
            height: auto;
            margin-bottom: 20px;
        }

        .container {
            margin-left: 100px;
            padding: 20px;
        }

        .header {
            background: rgba(255, 255, 255, 0.8); /* Fondo blanco con transparencia */
            color: #000;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2.5em;
            margin: 0;
        }

        .product-card {
            background: rgba(255, 255, 255, 0.9); /* Fondo blanco con transparencia */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }

        .product-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .product-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-details {
            padding: 15px;
        }

        .product-title {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.2em;
            color: #f00;
            margin-bottom: 10px;
        }

        .btn-buy {
            background-color: #ff69b4; /* Rosa brillante */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-buy:hover {
            background-color: #ff1493; /* Rosa más oscuro */
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
                width: 30px;
            }

            .header h1 {
                font-size: 2em;
            }

            .product-title {
                font-size: 1.2em;
            }

            .product-price {
                font-size: 1em;
            }

            .btn-buy {
                padding: 8px 16px;
                font-size: 0.9em;
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
            <h1>Tienda de Libros - THEBOOK</h1>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://marketplace.canva.com/EAFutLMZJKs/1/0/1003w/canva-portada-libro-novela-suspenso-elegante-negro-wxuYB_sJtMw.jpg" alt="Producto 1" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Cruce de Caminos</div>
                        <div class="product-price">$15.99</div>
                        <button class="btn-buy" onclick="location.href='producto1.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://marketplace.canva.com/EAFjNCKkDPI/1/0/1003w/canva-portada-de-libro-de-fantas%C3%ADa-dram%C3%A1tico-verde-Ct1fLal3ekY.jpg" alt="Producto 2" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Reyes Caidos</div>
                        <div class="product-price">$25.99</div>
                        <button class="btn-buy" onclick="location.href='producto2.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://marketplace.canva.com/EAE8SCCNlvo/1/0/1003w/canva-verde-y-rosa-ciencia-ficci%C3%B3n-portada-de-libro-SSKxUZUBOJg.jpg" alt="Producto 3" class="product-img">
                    <div class="product-details">
                        <div class="product-title">La Vida dentro de tu Cabesa</div>
                        <div class="product-price">$35.99</div>
                        <button class="btn-buy" onclick="location.href='producto3.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkfINPOXpitTf5KiQMTGS4HdKBlnPkF_MSEw&s" alt="Producto 4" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Cada Historia Cuenta</div>
                        <div class="product-price">$45.99</div>
                        <button class="btn-buy" onclick="location.href='producto4.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://media.revistaad.es/photos/60c227359ae22619e08751b2/master/w_1600%2Cc_limit/247747.jpg" alt="Producto 5" class="product-img">
                    <div class="product-details">
                        <div class="product-title">Matar a un Ruiseñor</div>
                        <div class="product-price">$55.99</div>
                        <button class="btn-buy" onclick="location.href='producto5.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card">
                    <img src="https://template.canva.com/EADtutwov_Q/1/0/256w-nJr37FPJeZs.jpg" alt="Producto 6" class="product-img">
                    <div class="product-details">
                        <div class="product-title">El Buen Cirujano</div>
                        <div class="product-price">$65.99</div>
                        <button class="btn-buy" onclick="location.href='producto6.php'">Ir a Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
