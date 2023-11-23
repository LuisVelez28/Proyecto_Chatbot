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
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <style>
        /* Estilos modificados */
        .bg-success {
            background-color: yellow !important;
        }

        .text-success {
            color: yellow !important;
        }

        /* Agregar más estilos si es necesario */
    </style>
</head>

</head>

 <!-- Header -->
 <nav class="navbar navbar-expand-lg navbar-light shadow">
  <div class="container d-flex justify-content-between align-items-center">
  <div class="w-100 d-flex justify-content-between">
            <a href="/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('inicio','','img/Recurso 2.png',1)"><img src="img/Recurso 1.png" alt="" width="80" height="75" id="inicio"></a><a class="navbar-brand text-success logo h1 align-self-start" href="/">
          &nbsp; </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

    <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
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
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Sobre Nosotros</h1>
                    <p  class="texto-negro">
                    Como La plancha, somos una empresa que se dedica apasionadamente a la fabricación y distribución de productos alimenticios de alta calidad. Desde nuestros inicios nos hemos comprometido a ofrecer alimentos cuidadosamente elaborados con los mejores ingredientes y procesos rigurosos.               </p>
                    <p class="texto-negro">Nuestro enfoque se centra en la excelencia en cada etapa de producción, desde la selección de materias primas frescas y saludables hasta la meticulosa preparación; esto con el objetivo de bridnarle a nuestros clientes, más que una comida, una experiencia.</p>
                </div>
                <div class="col-md-4">
                    <img style="border:2px solid; color:black;" src="img/blue.png" height="400" width="400" class="rounded-circle" >
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Contáctanos</h1>
                <p style="font-family: Roboto, sans-serif">
                  Contamos con un servicio altamente cualificado. ¡Comunicate con nosotros!
              </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-6 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"></div>
                    <div class="col-md-4 mx-auto d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/laplanchamanizales/?hl=es-la">
                    <img src="img/instagram.png" height="200" width="200" class="img-fluid" alt="Instagram Image">
                    </a>
                    </div>
                    <h2 class="h5 mt-4 text-center">Instagram</h2>
          
                </div>

            </div>

            <div class="col-md-6 col-lg-6 pb-5">
              <div class="h-100 py-5 services-icon-wap shadow text-center">
                <div class="h1 text-success"></div>
                <div class="col-md-4 mx-auto d-flex align-items-center justify-content-center">
                <a href="https://www.facebook.com/laplanchamanizales/?locale=es_LA">
                <img src="img/facebook.png " height="200" width="200" class="img-fluid" alt="Facebook Image">
                </a>
                </div>
                  <h2 class="h5 mt-4">Facebook</h2>
                </div>
            </div>

        </div>
    </section>
    <!-- End Section -->
                      

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">LA PLANCHA MANIZALES</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Calle 46a # 21 - 49, Manizales, Colombia
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            <a class="text-decoration-none" href="tel:321-630-4137">3216304137
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            <a class="text-decoration-none" href="gerencia.laplancha@gmail.com">gerencia.laplancha@gmail.com</a>
                        </li>
                    </ul>
                </div>
        </div>
        </div>



    </footer>
</body>

</html>
