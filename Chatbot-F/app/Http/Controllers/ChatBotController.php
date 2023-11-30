<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Conversations\busquedaProducto;
use App\Models\Producto;
use App\Models\RangoPrecio;
use App\Models\Sabor;
use App\Models\Tipo_producto;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class ChatBotController extends Controller
{
    private $nombre_cliente;
    private $tempTipo;
    private $tempSabor;
    private $tempPrecio;


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
            //$bot->reply('Que bendicion');
            $this->productFinder($bot);
            // $pedir=new busquedaProducto;
            // $pedir->main($bot);
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

    protected function productFinder(BotMan $bot){
        $opciones="Que tipo de producto deseas?\nLas opciones son: ";

        $tipos= Tipo_producto::all();
        foreach($tipos as $tipo){
            $opciones .= $tipo->nombre." | ";
        }

        $bot->ask($opciones, function(Answer $answer) use ($bot){
            $this->say("\n");
            $ans=$answer->getText();
            $this->say($ans);
            // $this->nombre_cliente=$answer->getText();

            // $bot->reply("ha digitado ");
            $idTipo = Tipo_producto::where('nombre',$ans)->first();
            //$this->say("bbb".$idTipo);
            //$this->say($temp2);

            if(isset($idTipo)){
                $this->say("bbb".$idTipo->id);
                $this->tempTipo=$idTipo->id;
                $this->say("ccc".$this->tempTipo);
                $this->saborFinder($bot);
            }else{
                $this->say('Lo siento, no reconozco ese tipo de producto');
                $this->productFinder($bot);
            }
        });
    }

    protected function saborFinder(BotMan $bot){
        $opciones='Que tipo de sabor deseas?\nLas opciones son: ';
        $tipos= Sabor::all();
        foreach($tipos as $tipo){
            $opciones .= $tipo->nombre.' | ';
        }

        $bot->ask($opciones, function(Answer $answer) use ($bot){
            $this->say("\n");
            $ans=$answer->getText();
            $this->say($ans);
            // $this->nombre_cliente=$answer->getText();

            // $bot->reply("ha digitado ");
            $idSabor = Sabor::where('nombre',$ans)->first();

            if(isset($idSabor)){
                $this->say("bbb".$idSabor->id);
                $this->tempSabor=$idSabor->id;  
                $this->say("ccc".$this->tempSabor);
                $this->rangoFinder($bot);
            }else{
                $bot->reply('Lo siento, no reconozco ese tipo de producto');
                $this->saborFinder($bot);
            }
        });
    }

    
    protected function rangoFinder(BotMan $bot){
        $opciones='Que tipo de sabor deseas?\nLas opciones son: ';
        $tipos= RangoPrecio::all();
        foreach($tipos as $tipo){
            $opciones .= $tipo->nombre.' | ';
        }

        $bot->ask($opciones, function(Answer $answer) use ($bot){
            $this->say("\n");
            $ans=$answer->getText();
            $this->say($ans);
            // $this->nombre_cliente=$answer->getText();

            // $bot->reply("ha digitado ");
            $rangoPrecio = RangoPrecio::where('nombre',$ans)->first();

            if(isset($idSabor)){
                $this->say("bbb".$rangoPrecio->id);
                $this->tempPrecio=$rangoPrecio->id;  
                $this->say("ccc".$this->tempPrecio);
                $this->findProduct($bot);
            }else{
                $bot->reply('Lo siento, no reconozco ese rango');
                $this->rangoFinder($bot);
            }
        });
    }

    protected function findProduct(Botman $bot){
        $condiciones=[
            'id_sabor'=>$this->tempTipo,
            'id_rango_precio'=>$this->tempPrecio,
            'id_tipo_producto'=>$this->tempSabor,
        ];
        $producto=Producto::where($condiciones);
        $bot->reply($producto);
    }

}
