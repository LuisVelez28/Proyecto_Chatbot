<?php

namespace Database\Seeders;

use App\Models\Sabor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaboresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sabor= new Sabor();
        $sabor->nombre = 'Dulce';
        $sabor->descripcion = 'Sabor agradablemente dulce y azucarado.';
        $sabor->save();

        $sabor= new Sabor();
        $sabor->nombre = 'Salado';
        $sabor->descripcion = 'Sabor salado y mineral.';
        $sabor->save();

        $sabor= new Sabor();
        $sabor->nombre = 'Ácido';
        $sabor->descripcion = 'Sabor agrio y ácido, como el de los cítricos.';
        $sabor->save();

        $sabor= new Sabor();
        $sabor->nombre = 'Amargo';
        $sabor->descripcion = 'Sabor amargo y astringente, común en algunas verduras y hierbas.';
        $sabor->save();

        $sabor= new Sabor();
        $sabor->nombre = 'Umami';
        $sabor->descripcion = 'Sabor agradable y salado, a menudo asociado con alimentos ricos en proteínas como carne y pescado.';
        $sabor->save();

        $sabor= new Sabor();
        $sabor->nombre = 'Picante';
        $sabor->descripcion = 'Sabor picante y caliente, como el de los chiles.';
        $sabor->save();

        $sabor= new Sabor();
        $sabor->nombre = 'Astringente';
        $sabor->descripcion = 'Sabor que hace que la boca se sienta seca y áspera, común en algunos tés y vinos.';
        $sabor->save();
    }
}
