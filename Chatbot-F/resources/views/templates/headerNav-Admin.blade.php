<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/CuentaAdmin">LaPlancha</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
            <li class="nav-item">
                <a class="nav-link" href="{{route('productos.index')}}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Productos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('rangoPrecios.index')}}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Rango Precios
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('sabores.index')}}">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Sabores
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tipoProductos.index')}}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Tipos Productos
                </a>
            </li>
        </ul>
    </div>
</nav>
