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
                    $this->say("Lo siento, no hay productos disponibles para el sabor '{$rangoPrecio}'.");
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
                    $this->say("Lo siento, no hay productos disponibles para el sabor '{$tipoProducto}'.");
                } else {
                    foreach ($productosTipo as $producto) {
                    $this->say(
                        "| {$producto->nombre} | {$producto->descripcion} | {$producto->precio} |" . PHP_EOL
                    );

                }
            }
        });
    });

        $botman->hears('ayuda', function ($bot) {
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
