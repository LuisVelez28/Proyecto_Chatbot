<?php

namespace Database\Seeders;

use App\Models\Rango_precio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RangoPreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rango_precio= new Rango_precio();
        $rango_precio->nombre = 'barato';
        $rango_precio->precio_min = 0;
        $rango_precio->precio_max = 5000;
        $rango_precio->save();

        $rango_precio= new Rango_precio();
        $rango_precio->nombre = 'caro';
        $rango_precio->precio_min = 5000;
        $rango_precio->precio_max = 26000;
        $rango_precio->save();

    }
}
