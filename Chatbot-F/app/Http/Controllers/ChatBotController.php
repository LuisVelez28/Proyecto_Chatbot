<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\BotMan;

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
            $bot->reply('Los productos disponibles son: ');

            $productos = Producto::with(['sabor', 'tipoProducto', 'rangoPrecio'])->get();

            foreach ($productos as $producto) {
                $bot->reply("  - Producto: {$producto->nombre}:");
                $bot->reply("  - Descripción: {$producto->descripcion}");
                $bot->reply("  - Precio: {$producto->precio}");
                $bot->reply("  - Stock: {$producto->stock}");

                // Acceder a las relaciones
                $bot->reply("  - Sabor: {$producto->sabor->nombre}");
                $bot->reply("  - Tipo de Producto: {$producto->tipoProducto->nombre}");
                $bot->reply("  - Rango de Precio: {$producto->rangoPrecio->nombre}");
            }
        });

        $botman->hears('ayuda', function ($bot) {
            $bot->reply('Los comandos disponibles son:
            - "ayuda": muestra los comandos disponibles
            - "hola": saluda al bot
            - "adios": despide al bot
            - "Mostrar productos": muestra los productos disponibles
            - "buscar producto": busca un producto
            - "buscar producto por tipo producto": busca un producto por tipo producto
            - "buscar producto por sabor": busca un producto por sabor
            - "buscar producto por rango de precio": busca un producto por rango de precio
            - "buscar producto por tipo producto y sabor": busca un producto por tipo producto y sabor
            - "buscar producto por tipo producto y rango de precio": busca un producto por tipo producto y rango de precio
            - "buscar producto por sabor y rango de precio": busca un producto por sabor y rango de precio
            - "buscar producto por tipo producto, sabor y rango de precio": busca un producto por tipo producto, sabor y rango de precio
            ');
        });
        $botman->listen();
    }
}
