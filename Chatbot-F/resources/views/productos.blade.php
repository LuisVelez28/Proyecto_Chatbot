<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Sedes</title>
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

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="w-100 d-flex justify-content-between">
            <a href="/" onMouseOut="MM_swapImgRestore()"
                onMouseOver="MM_swapImage('inicio','','img/Recurso 2.png',1)"><img src="img/Recurso 1.png"
                    alt="" width="80" height="75" id="inicio"></a><a
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

{{-- CUERPO --}}

<body>
    <br />
    <div class="text-center">
        <h3 class="centradotitulos">Conoce Nuestros Productos</h3>
        <hr />
    </div>
    <div class="col-12">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner custom-img  custom-background text-center">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img  style="border:2px solid; color:black;"  alt="100%x280" class="square" class="tamañoimagen" src="img\empanadas.jpg">
                                
                                <div class="card-body">
                                    <h5 class="centradotitulosproductos">Empanadas</h5>
                                    <p>Las empanadas de la plancha son una deliciosa opción culinaria que se prepara mediante la cocción de empanadas rellenas en una plancha caliente en lugar de freírlas o hornearlas. Este método de cocción le confiere a las empanadas una textura crujiente por fuera y un relleno jugoso por dentro. La variedad de sabores disponibles para rellenar estas empanadas es amplia, lo que las convierte en una opción versátil y apetitosa.</p>
                                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                                    <div class="row border-time">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img  style="border:2px solid; color:black;"  alt="100%x280" class="square"  class="tamañoimagen" src="img\arepas.jpg">
                                <div class="card-body">
                                    <h5 class="centradotitulosproductos">Arepas de Queso</h5>
                                    <p>La preparación de las arepas de queso de la plancha implica la mezcla de la masa de maíz con el queso, formando discos que se cocinan en una plancha caliente hasta que adquieren una textura crujiente por fuera y quedan suaves y esponjosas por dentro. El proceso de cocción en la plancha permite que el queso se derrita y se mezcle perfectamente con la masa, creando una arepa con un centro cremoso y un exterior dorado y ligeramente crujiente.</p>
                                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                                    <div class="row border-time">
                                        <div class="col">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img  style="border:2px solid; color:black;"  class="square"  alt="100%x280" class="tamañoimagen" src="img\panzeroti.jpg">
                                <div class="card-body">
                                    <h5 class="centradotitulosproductos">Plancherottis</h5>
                                    <p>Los plancherottis de la plancha se cocinan cuidadosamente con el objetivo de garantizar  la calidad de este alimento y están rellenos de una mezcla deliciosa y bien equilibrada de carne sazonada, verduras frescas y quesos selectos .La masa utilizada para envolver estos ingredientes es fina y crujiente en el exterior, mientras que el relleno se cocina a la perfección, manteniendo su jugosidad y sabor.</p>
                                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                                    <div class="row border-time">
                                        <div class="col">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">

                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img  style="border:2px solid; color:black;"  class="square"  alt="100%x280" class="tamañoimagen" src="img\pandebono.jpg">
                                <div class="card-body">
                                    <h5 class="centradotitulosproductos">Pandebonos</h5>
                                    <p>Los pandebonos de la plancha  son una deliciosa especialidad de la cocina colombiana, conocidos por su textura esponjosa y su sabor único. Estos son perfectamente horneados: por fuera, tiene una corteza dorada y crujiente que contrasta con su interior suave y esponjoso. El queso fresco, que se derrite durante el proceso de horneado, contribuye a la humedad y suavidad del pandebono, aportando también un toque salado y delicioso.</p>
                                    <h6 class="card-subtitle mb-2 text-muted"> </h6>
                                    <div class="row border-time">
                                        <div class="col">


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img  style="border:2px solid; color:black;"  alt="100%x280" class="square"  class="tamañoimagen" src="img\jugos.jpg">
                                <div class="card-body">
                                    <h5 class="centradotitulosproductos">Diversos Jugos</h5>
                                    <p>Los jugos que se venden en la plancha son una exquisita y diversa selección de bebidas que despiertan los sentidos con su gran variedad de sabores y combinaciones. La magia comienza con la frescura de los ingredientes: frutas tropicales vibrantes, hierbas aromáticas y otros elementos cuidadosamente seleccionados. Nuestros productos combinan perfecto con nuestros jugos, viviendo una experiencia inigualable</p>
                                    <div class="row border-time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img  style="border:2px solid; color:black;"  alt="100%x280" class="square"  class="tamañoimagen" src="img\congelados.png">                             
                                <div class="card-body">
                                    <h5 class="centradotitulosproductos">Diversos Productos Congelados</h5>
                                    <p>Los productos congelados de la plancha manejan una diversidad de alimentos que han sido sometidos a un proceso de congelación para preservar su frescura, sabor y calidad nutricional, lo que ralentiza o detiene el deterioro causado por microorganismos y enzimas. Productos  de grandes variedades, que pueden ser almacenados para luego solamente ser cocinados y puestos en la mesa. Siempre tendrás alimentos frescos para comer.</p>
                                    <div class="row border-time">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row pt-4 mt-4 row justify-content-between">
        <div class="text-center">
            <a class="btn mb-3 mr-1" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <i class="btn btn-danger">Anterior</i>
            </a>
            <a class="btn mb-3" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <i class="btn btn-danger">Siguiente</i>
            </a>
        </div>



        <!-- Agrega tus scripts JavaScript aquí -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>

</body>

</html>
