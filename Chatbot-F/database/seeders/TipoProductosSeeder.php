<?php

namespace Database\Seeders;

use App\Models\Tipo_producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipo_producto = new Tipo_producto();
        $tipo_producto->nombre = 'empanadas';
        $tipo_producto->descripcion = '120 gramos de la tradicional mezcla paisa de nuestras empanadas, hechas con puro maiz y rellenas de nuestras diferentes opciones';
        $tipo_producto->save();

        $tipo_producto = new Tipo_producto();
        $tipo_producto->nombre = 'arepas';
        $tipo_producto->descripcion = 'Deliciosa arepa de Maiz blanco salado y rellenas con diferentes opciones';
        $tipo_producto->save();

        $tipo_producto = new Tipo_producto();
        $tipo_producto->nombre = 'Arepa de huevos';
        $tipo_producto->descripcion = 'Arepa de maiz amarilla precocida y diferentes opciones';
        $tipo_producto->save();

        $tipo_producto = new Tipo_producto();
        $tipo_producto->nombre = 'plancherotti';
        $tipo_producto->descripcion = 'Nuestra suave y original fórmula de la masa del plancherotti, garantiza que disfrutarás cada mordisco. Pruébalo en cualquiera de nuestras presentaciones.';
        $tipo_producto->save();

        $tipo_producto = new Tipo_producto();
        $tipo_producto->nombre = 'panadería';
        $tipo_producto->descripcion = 'Nuestra panadería es el complemento perfecto para cualquier ocasión. Disfruta de nuestros productos de panadería en cualquiera de nuestras presentaciones.';
        $tipo_producto->save();

        $tipo_producto = new Tipo_producto();
        $tipo_producto->nombre = 'productos congelados';
        $tipo_producto->descripcion = 'Nuestros productos congelados son la mejor opción para disfrutar en casa. Disfruta de nuestros productos congelados en cualquiera de nuestras presentaciones.';
        $tipo_producto->save();

        $tipo_producto = new Tipo_producto();
        $tipo_producto->nombre = 'bebidas';
        $tipo_producto->descripcion = 'Nuestras bebidas son la mejor opción para disfrutar en casa. Disfruta de nuestras bebidas en cualquiera de nuestras presentaciones.';
        $tipo_producto->save();
    }
}
