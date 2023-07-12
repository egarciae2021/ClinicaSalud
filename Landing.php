<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienestar Total</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .navbar {
            background-color: #f8f9fa;
        }

        .carousel-item {
            height: 500px;
            background-size: cover;
            background-position: center;
        }

        .section {
            padding: 80px 0;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-heading h2 {
            font-size: 36px;
            font-weight: bold;
        }

        .section-heading p {
            font-size: 18px;
            color: #888;
        }

        .sombrear:hover {
            background-color: black;
            color: white !important;
            font-size: 17px !important;
            cursor: pointer;
        }

        .nav-link:hover {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Bienestar Total</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dispositivos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sombrear" href="Login.php">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sombrear" href="Registro.php">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://images.pexels.com/photos/4426519/pexels-photo-4426519.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                <div class="carousel-caption">
                    <h1>Bienestar Total</h1>
                    <p>Obtén informes detallados de tu salud con tu smartwatch.</p>
                    <a href="Registro.php" class="btn btn-primary">Registrarse</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://media.istockphoto.com/id/807201382/es/foto/an%C3%A1lisis-mercado-negocio-emprendedor-inversi%C3%B3n-de-comercio-equipo-comprobaci%C3%B3n-bolsa-en-la.jpg?s=612x612&w=0&k=20&c=kP2itN_Tx8xHUHTYXlLk8C7qp_-XGm1j4nUq2cEWmWI=');">
                <div class="carousel-caption">
                    <h1>Bienestar Total</h1>
                    <p>Mejora tu calidad de vida con los datos de tu smartwatch.</p>
                    <a href="Registro.php" class="btn btn-primary">Registrarse</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://media.istockphoto.com/id/1299554668/es/foto/hombre-hablando-con-el-m%C3%A9dico-en-l%C3%ADnea-a-trav%C3%A9s-de-videollamada-en-el-tel%C3%A9fono-inteligente.jpg?s=612x612&w=0&k=20&c=ztByrwk-n6nM9AOVcgsyYezk1X0GZydMU6irFUNFshI=');">
                <div class="carousel-caption">
                    <h1>Bienestar Total</h1>
                    <p>Descubre tu potencial y alcanza tus metas de bienestar.</p>
                    <a href="Registro.php" class="btn btn-primary">Registrarse</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <div class="container-fluid" >

        <div style="display:inline-block;width:70%;"> 
            <!-- Inicio Section -->
            <section class="section">
                <div class="container">
                    <div class="section-heading">
                        <h2>Inicio</h2>
                        <p>Bienestar Total te ayuda a monitorizar y mejorar tu salud.</p>
                    </div>
                    <!-- Contenido de la sección Inicio -->
                </div>
            </section>

            <!-- Dispositivos Section -->
            <section class="section bg-light">
                <div class="container">
                    <div class="section-heading">
                        <h2>Dispositivos</h2>
                        <p>Descubre nuestros dispositivos compatibles con Bienestar Total.</p>
                    </div>
                    <!-- Contenido de la sección Dispositivos -->
                </div>
            </section>

            <!-- Acerca de Nosotros Section -->
            <section class="section">
                <div class="container">
                    <div class="section-heading">
                        <h2>Acerca de Nosotros</h2>
                        <p>Conoce más sobre Bienestar Total y nuestro equipo.</p>
                    </div>
                    <!-- Contenido de la sección Acerca de Nosotros -->
                </div>
            </section>

        </div>
        <div style="display: inline-block; width: 500px; height: 500px; background-image: url('https://mister-mango.omni.la/ProductCatalog/Workspace.C2X4BOT6UW4AA/ProductCatalog.C37ZT6MBSPXQC/1500x1500/C372SEGFPLSTK.jpg'); background-size: cover; background-position: center;">
</div>

    </div>


            <!-- Acerca de Nosotros Section -->
            <section class="section" style="background-color: gray;">
                <div class="container">
                    <div class="section-heading">
                    </div>
                    <!-- Contenido de la sección Acerca de Nosotros -->
                </div>
            </section>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>