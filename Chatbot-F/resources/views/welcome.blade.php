<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>La Plancha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<header>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="w-100 d-flex justify-content-between">
                <a href="/" onMouseOut="MM_swapImgRestore()"
                    onMouseOver="MM_swapImage('inicio','','img/Recurso 2.png',1)"><img src="img/Recurso 1.png" alt=""
                        width="80" height="75" id="inicio"></a><a
                    class="navbar-brand text-success logo h1 align-self-start" href="/">
                    &nbsp; </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
                    id="templatemo_main_nav">
                    <div class="flex-fill">
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">Sobre nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Productos">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Sedes">Sedes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </nav>
    <!-- Close Header -->

    <body>
        <div class="container">
            <div class="row">

                <div class="col">
                    <!-- Esto es para la ventana de productos -->
                    <div class="jumbotron">
                        <h1 class="centradotitulos">NUESTROS PRODUCTOS</h1>
                        <p class="parrafos">Conoce nuestros productos. Con nosotros puedes vivir una experiencia
                            inigualable
                        </p>
                        <hr class="my-4" />
                        <a href="/Productos">
                        <img src="img/productos.jpg" width="500" height="400" class="rounded-circle" />
                        <hr class="my-4" />
                        </a>
                        <p class="parrafos">¡Tenemos empanadas, panzerotis, dedos de queso, arepas de queso y muchos
                            más!
                        </p>
                        <div class="text-center">
                            <a href="/Productos" class="btn btn-danger">Productos</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="jumbotron">
                        <h1 class="centradotitulos">NUESTRAS SEDES</h1>
                        <p class="parrafos">Estamos más cerca de lo que piensas, ven y vive un rato agradable, estamos
                            listos para atenderte</p>
                        <hr class="my-4" />
                        <a href="/Sedes">
                            <!-- Enlace que lleva a la vista 'Sedes' -->
                            <img src="img\locales.jpg" width="500" height="400" class="rounded-circle float-right"
                                class= "my-4" />
                        </a>
                        <hr class="my-4" />
                        <p class="parrafos">En Manizales estamos en diferentes locaciones, donde estamos listos para atenderte. ¿Quieres conocerlas?</p>
                        <div class="text-center">
                            <a href="/Sedes" class="btn btn-danger">Sedes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>