<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        <a class="nav-link" href="#">Inicio</a>
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

<body>
    <div class="container">
        <div class="row">

            <div class="col"> <!-- Esto es para la ventana de productos -->
                <div class="jumbotron">
                    <h1 class="centradotitulos">NUESTROS PRODUCTOS</h1>
                    <p class="parrafos">Conoce nuestros productos. Con nosotros puedes vivir una experiencia inigualable
                    </p>
                    <hr class="my-4" />
                    <img src="imagenes\productos.jpg" width="500" height="400" class="rounded-circle" />
                    <hr class="my-4" />
                    <p class="parrafos">¡Tenemos empanadas, panzerotis, dedos de queso, arepas de queso y muchos más!
                    </p>
                    <div class="text-center">
                        <a href="/Productos" class="btn btn-danger">Productos</a>
                    </div>
                </div>
            </div>

            <div class="col"> <!-- Esto es para la ventana de Locales -->
                <div class="jumbotron">
                    <h1 class="centradotitulos">NUESTRAS SEDES</h1>
                    <p class="parrafos">Estamos más cerca de lo que piensas, ven y vive un rato agradable, estamos
                        listos para atenderte</p>
                    <hr class="my-4" />
                    <img src="imagenes\locales.jpg" width="500" height="400" class="rounded-circle" />
                    <hr class="my-4" />
                    <p class="parrafos">En Manizales estamos en diferentes locaciones. ¿Quieres conocerlas?</p>
                    <div class="text-center">
                        <a href="/Sedes" class="btn btn-danger">Sedes</a>
                    </div>
                </div>
            </div>

            <div class="col"> <!-- Esto es para la ventana de Pedidos -->
                <div class="jumbotron">
                    <h1 class="centradotitulos">PARA TÚ DÍA A DÍA</h1>
                    <p class="parrafos">Hoy es un buen día para disfrutar de nuestros ricos productos en compañía de la
                        gente que quieres y la alegría que nos caracteriza</p>
                    <hr class="my-4" />
                    <img src="imagenes\pedidos.jpg" width="500" height="400" class="rounded-circle" />
                    <hr class="my-4" />
                    <p class="parrafos">¡No te quedes sin disfrutar de sabrosa comida que de seguro te dejará hecha agua
                        la boca!</p>
                    <div class="text-center">
                        <button type="button" class="btn btn-danger">Loncheras y Combos</button>
                    </div>
                </div>
            </div>

            <div class="col"> <!-- Esto es para la ventana de Contacto -->
                <div class="jumbotron">
                    <h1 class="centradotitulos">HABLA CON NOSOTROS</h1>
                    <p class="parrafos">Este es el ChatBot de La Plancha; Aquí podras consultar información nuestra en
                        cualquier momento y realizar tus pedidos directamente</p>
                    <hr class="my-4" />
                    <p class="parrafos">Estamos listos para atenderte ¡Escríbenos!</p>
                    <div class="text-center">
                        <button type="button" class="btn btn-danger">Hablar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
