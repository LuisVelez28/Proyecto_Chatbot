<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producto= new Producto();
        $producto->nombre = 'Carne';
        $producto->descripcion = 'Carne, papa y nuestra tradicional fórmula';
        $producto->precio = 2500;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 1;
        $producto->save();
    }
}
