<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>carrusel productos</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"  />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

</head>

<header>
    <nav class="navbar navbar-expand-lg bg-custom">
        <div class="container">
            <a class="navbar-brand" href="#">La Plancha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre-nosotros">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactanos">Contáctanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


{{-- CUERPO --}}
<body>
    <br/>
    <div class="text-center">
        <h3 class="">Conoce Nuestros Productos</h3>
        <hr/>
    </div>
    <div class="col-12">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner custom-img  custom-background text-center">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img alt="100%x280" class="tamañoimagen" src="imagenes\empanadas.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Empanadas</h5>
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
                                <img alt="100%x280" class="tamañoimagen" src="imagenes\arepas.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Arepas de Queso</h5>
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
                                <img class="img-fluid" alt="100%x280"
                                class="tamañoimagen" src="imagenes\panzeroti.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Pancherottis</h5>
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
                                <img class="img-fluid" alt="100%x280" class="tamañoimagen" src="imagenes\pandebono.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Pandebonos</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">     </h6>
                                    <div class="row border-time">
                                        <div class="col">
                                       

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="img-fluid" alt="100%x280" class="tamañoimagen" src="imagenes\jugos.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Diversos Jugos</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                    </h6>
                                    <div class="row border-time">
                                        <div class="col">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="img-fluid" alt="100%x280" class="tamañoimagen" src="./imagenes/conferencistas/eguerrero.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Predicción basada en datos</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Enrique Gonzalez Guerrero</h6>
                                    <div class="row border-time">
                                        <div class="col">
                                            2 de noviembre 2023 - 2:00 pm
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
                                <img class="img-fluid" alt="100%x280" src="imagenes/conferencistas/sousa.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Tendencias Modernas en Gestión de Proyectos</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Andres Souza</h6>
                                    <div class="row border-time">
                                        <div class="col">
                                            2 de noviembre 2023 - 4:00 pm
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="img-fluid" alt="100%x280" src="/imagenes/conferencistas/mario.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Virtual Machines and Containers Running Artificial
                                        Intelligent Applications</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Mario German Castillo Ramírez</h6>
                                    <div class="row border-time">
                                        <div class="col">
                                            3 de noviembre 2023 - 8:00 am
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="img-fluid" alt="100%x280" src="/imagenes/conferencistas/gillber.jpg">
                                <div class="card-body">
                                    <h5 class="card-title">Ciberseguridad: ¿cómo construir una carrera en la era de
                                        la IA?</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Gilber Corrales Rubiano</h6>
                                    <div class="row border-time">
                                        <div class="col">
                                            3 de noviembre 2023 - 10:00 am
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
    </div>
    <div class="row pt-4 mt-4 row justify-content-between">
        <div class="text-center" >
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
