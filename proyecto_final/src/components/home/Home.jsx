import React from 'react';
import "./home.css";

const Home = () => {
    return (
        <div>

            <div class="container">
                <div class="row row-cols-2">

                    <div class="col"> {/* Esto es para la ventana de productos */}
                        <div class="jumbotron">
                            <h1 class="centradotitulos">NUESTROS PRODUCTOS</h1>
                            <p class="parrafos">Conoce nuestros productos. Con nosotros puedes vivir una experiencia inigualable</p>
                            <hr class="my-4" />
                            <img src="productos.jpg" width="500" height="400" class="rounded-circle" />
                            <hr class="my-4" />
                            <p class="parrafos">¡Tenemos empanadas, panzerotis, dedos de queso, arepas de queso y muchos más!</p>
                            <div class="text-center">
                                <li><link to="/componente2" class="btn btn-danger">Productos</link></li> 
                            </div>
                    </div></div>

                <div class="col">  {/* Esto es para la ventana de Locales  */}
                    <div class="jumbotron">
                        <h1 class="centradotitulos">NUESTRAS SEDES</h1>
                        <p class="parrafos">Estamos más cerca de lo que piensas, ven y vive un rato agradable,estamos listos para atenderte</p>
                        <hr class="my-4" />
                        <img src="locales.jpg" width="500" height="400" class="rounded-circle" />
                        <hr class="my-4" />
                        <p class="parrafos">En Manizales estamos en diferentes locaciones. ¿Quieres conocerlas?</p>
                        <div class="text-center">
                            <button type="button" class="btn btn-danger">Locales</button>
                        </div>
                    </div></div>

                <div class="col">  {/* Esto es para la ventana de  */}
                    <div class="jumbotron">
                        <h1 class="centradotitulos">HAZ TÚ PEDIDO</h1>
                        <p class="parrafos">Hoy es un buen día para disfrutar de nuestros ricos productos en compañía de la gente que quieres y la alegría que nos caracteriza</p>
                        <hr class="my-4" />
                        <img src="pedidos.jpg" width="500" height="400" class="rounded-circle" />
                        <hr class="my-4" />
                        <p class="parrafos">¡No te quedes sin disfrutar de sabrosa comida que de seguro te dejará hecha agua la boca!</p>
                        <div class="text-center">
                            <button type="button" class="btn btn-danger">Pedidos</button>
                        </div>

                    </div></div>

                <div class="col"> {/* Esto es para la ventana de  */}
                    <div class="jumbotron">
                        <h1 class="display-4 centradotitulos">Hello, world!</h1>
                        <p class="parrafos">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4" />
                        <p class="parrafos">It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <hr class="my-4" />
                        <div class="text-center">
                            <button type="button" class="btn btn-danger">Habla con nosotros</button>
                        </div>
                    </div></div>
            </div>
        </div>

        </div >
    )
}

export default Home