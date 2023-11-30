<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use BotMan\BotMan\Messages\Incoming\Answer;

class ChatBotController extends Controller
{
    private $nombre_cliente;

    public function index()
    {
        $botman = app('botman');
        $botman->fallback(function ($bot) {
            $bot->reply('Lo siento, no entiendo lo que quieres decirme. Puedes escribir "ayuda" para ver los comandos disponibles');
        });
        $botman->hears('hola', function ($bot) {
            $bot->ask('Hola, dime cómo te llamas', function (Answer $answer) {
                $this->nombre_cliente = $answer->getText();
                $this->say('Encantado de conocerte ' . $this->nombre_cliente);
            });
        });

        $botman->hears('adios', function ($bot) {
            $bot->reply('Hasta luego');
        });

        $botman->hears('Mostrar productos', function ($bot) {
            $productos = Producto::all();
            foreach ($productos as $producto) {
                $bot->reply(
                    "| {$producto->nombre} | {$producto->descripcion} | {$producto->precio} |" . PHP_EOL
                );
            }
        });

        $botman->hears('.*sabor.*', function ($bot) {
            $bot->ask('¿Qué sabor tienes ganas?', function(Answer $answer) {
                $sabor = $answer->getText();

                // Guardar la respuesta en una propiedad del controlador
                $this->saborElegido = $sabor;

                $productosSabor = Producto::whereHas('sabor', function ($query) use ($sabor) {
                    $query->where('nombre', $sabor);
                })->get();

                if ($productosSabor->isEmpty()) {
                    $this->say("Lo siento, no hay productos disponibles para el sabor '{$sabor}'.");
                } else {
                    foreach ($productosSabor as $producto) {
                        $this->say(
                            "| {$producto->nombre} | {$producto->descripcion} | {$producto->precio} |" . PHP_EOL
                        );

                    }
                }
            });
        });

        $botman->hears('.*precio.*', function ($bot) {
            $bot->ask('¿Qué rango de precio estás buscando? (barato/caro)', function (Answer $answer) {
                $rangoPrecio = $answer->getText();

                // Guardar la respuesta en una propiedad del controlador
                $this->rangoPrecioElegido = $rangoPrecio;

                $productosRango = Producto::whereHas('rangoPrecio', function ($query) use ($rangoPrecio) {
                    $query->where('nombre', $rangoPrecio);
                })->get();

                if ($productosRango->isEmpty()) {
                    $this->say("Lo siento, no hay productos disponibles para el rango de precio '{$rangoPrecio}'.");
                } else {
                    foreach ($productosRango as $producto) {
                        $this->say(
                            "| {$producto->nombre} | {$producto->descripcion} | {$producto->precio} |" . PHP_EOL
                        );

                    }
                }
            });
        });

        $botman->hears('.*tipo.*', function ($bot) {
            // Preguntar por el tipo de producto
            $bot->ask('¿Qué tipo de producto prefieres?', function (Answer $answer) {
                $tipoProducto = $answer->getText();

                // Guardar la respuesta en una propiedad del controlador
                $this->tipoProductoElegido = $tipoProducto;

                $productosTipo = Producto::whereHas('tipoProducto', function ($query) use ($tipoProducto) {
                    $query->where('nombre', $tipoProducto);
                })->get();

                if ($productosTipo->isEmpty()) {
                    $this->say("Lo siento, no hay productos disponibles para el tipo de producto '{$tipoProducto}'.");
                } else {
                    foreach ($productosTipo as $producto) {
                    $this->say(
                        "| {$producto->nombre} | {$producto->descripcion} | {$producto->precio} |" . PHP_EOL
                    );
                }
                }
            });
        });

        $botman->hears('crear producto', function ($bot) {
            $bot->ask('Ingrese el nombre del producto?', function (Answer $answer) {
                $nombre = $answer->getText();

                // Guardar la respuesta en una propiedad del controlador
                $this->nombreProducto = $nombre;

                // Preguntar por la descripcion del producto
                $this->ask('Ingrese la descripcion del producto?', function (Answer $answer) {
                    $descripcion = $answer->getText();

                    // Guardar la respuesta en una propiedad del controlador
                    $this->descripcionProducto = $descripcion;

                    // Preguntar por el precio del producto
                    $this->ask('Ingrese el precio del producto?', function (Answer $answer) {
                        $precio = $answer->getText();

                        // Guardar la respuesta en una propiedad del controlador
                        $this->precioProducto = $precio;

                        // Preguntar por el stock del producto
                        $this->ask('Ingrese el stock del producto?', function (Answer $answer) {
                            $stock = $answer->getText();

                            // Guardar la respuesta en una propiedad del controlador
                            $this->stockProducto = $stock;

                            // Preguntar por el sabor del producto
                            $this->ask('Ingrese el sabor del producto? | 1. barato | 2. caro |', function (Answer $answer) {
                                $sabor = $answer->getText();

                                // Guardar la respuesta en una propiedad del controlador
                                $this->saborProducto = $sabor;

                                // Preguntar por el rango de precio del producto;
                                $this->ask('Ingrese el rango de precio del producto? | 1. Dulce | 2. Salado | 3. Amargo | 4. Acido
                                | 5. Picante | 6. Sin sabor |', function (Answer $answer) {
                                    $rangoPrecio = $answer->getText();

                                    // Guardar la respuesta en una propiedad del controlador
                                    $this->rangoPrecioProducto = $rangoPrecio;

                                    // Preguntar por el tipo de producto
                                    $this->ask('Ingrese el tipo de producto? | 1. empanadas | 2. arepas | 3. arepas de huevo | 4. plancherotti
                                    | 5. panaderia | 6. productos congelados | 7. bebidas', function (Answer $answer) {
                                        $tipoProducto = $answer->getText();

                                        // Guardar la respuesta en una propiedad del controlador
                                        $this->tipoProducto = $tipoProducto;

                                        // Crear el producto
                                        $producto = new Producto();
                                        $producto->nombre = $this->nombreProducto;
                                        $producto->descripcion = $this->descripcionProducto;
                                        $producto->precio = $this->precioProducto;
                                        $producto->stock = $this->stockProducto;
                                        $producto->id_sabor = $this->saborProducto;
                                        $producto->id_rango_precio = $this->rangoPrecioProducto;
                                        $producto->id_tipo_producto = $this->tipoProducto;
                                        $producto->save();
                                        $this->say("Producto creado correctamente");
                                    });
                                });
                            });
                        });
                    });
                });
            });
        });

        $botman->hears('.*ayuda*.', function ($bot) {
            $bot->reply('Los comandos disponibles son:');
            $bot->reply('ayuda: muestra los comandos disponibles');
            $bot->reply('hola: saluda al bot');
            $bot->reply('adios: despide al bot');
            $bot->reply('Mostrar productos: muestra todos los productos disponibles');
            $bot->reply('sabor: muestra los productos disponibles para un sabor');
            $bot->reply('precio: muestra los productos disponibles para un rango de precio');
            $bot->reply('tipo: muestra los productos disponibles para un tipo de producto');
        });
        $botman->listen();


    }
}
