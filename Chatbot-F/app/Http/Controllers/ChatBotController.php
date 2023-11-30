<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Conversations\busquedaProducto;
use App\Models\Producto;
use App\Models\RangoPrecio;
use App\Models\Sabor;
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

        $botman->hears('Pedir', function ($bot) {
            $bot->reply(')sasas');
            $bot->starConversation(new busquedaProducto);
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
