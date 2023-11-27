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
        $producto->nombre = 'Empanada de carne';
        $producto->descripcion = 'Carne, papa y nuestra tradicional fórmula';
        $producto->precio = 2500;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 1;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Empanada Ranchera';
        $producto->descripcion = 'Maiz tierno, salchicha ranchera y queso';
        $producto->precio = 3000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 1;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Empanada Pollo y papa';
        $producto->descripcion = 'Mezcla del pollo con la más selecta papa de nuestra región';
        $producto->precio = 3000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 1;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Empanada Paisa';
        $producto->descripcion = 'Frijol, chicharrón, arroz y chorizo';
        $producto->precio = 3000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 1;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Empanada Pollo, queso, tocineta';
        $producto->descripcion = 'Tocineta ahumanda, con queso y pollo';
        $producto->precio = 3000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 1;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Empanada Mixta';
        $producto->descripcion = 'Carne, pollo y tocineta';
        $producto->precio = 3000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 1;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Empanada Chicharrón';
        $producto->descripcion = 'Delicioso chicharrón ahumado';
        $producto->precio = 3000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 1;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Empanada Lechona';
        $producto->descripcion = 'Lechona tolimense';
        $producto->precio = 3000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 1;
        $producto->save();

        #AREPA
        $producto= new Producto();
        $producto->nombre = 'Arepa de Queso';
        $producto->descripcion = 'Deliciosa arepa de maíz blanco salada con queso costeño y rellena de 30 gr de puro queso mozzarella';
        $producto->precio = 4800;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 2;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Arepa de huevo entero';
        $producto->descripcion = 'Deliciosa arepa de maíz amarillo precocida, rellena de huevo entero con el sabor de la costa colombiana';
        $producto->precio = 3200;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 3;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Arepa de huevo perico';
        $producto->descripcion = 'Deliciosa arepa de maíz amarillo precocida,rellena de huevo revuelto con cebolla y tomate';
        $producto->precio = 3900;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 3;
        $producto->save();

        #Plancherotti
        $producto= new Producto();
        $producto->nombre = 'Plancherotti Hawaiano';
        $producto->descripcion = 'Nuestra fórmula de la casa, que garantiza que disfrutarás cada mordisco de este plancherotti hawaiano';
        $producto->precio = 4800;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 4;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Plancherotti Ranchero';
        $producto->descripcion = 'Nuestra fórmula de la casa, que garantiza que disfrutarás cada mordisco de este plancherotti ranchero';
        $producto->precio = 4800;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 4;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Plancherotti de Pollo';
        $producto->descripcion = 'Nuestra fórmula de la casa, que garantiza que disfrutarás cada mordisco de este plancherotti de pollo';
        $producto->precio = 4800;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 4;
        $producto->save();

        #Panaderia
        $producto= new Producto();
        $producto->nombre = 'Almojabana';
        $producto->descripcion = 'Delicioso y suave producto para vivir un rato agradable';
        $producto->precio = 2600;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 5;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Pandequeso';
        $producto->descripcion = 'Delicioso y suave producto para vivir un rato agradable';
        $producto->precio = 2000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 5;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Chicarrón dulce';
        $producto->descripcion = 'Delicioso y suave producto para vivir un rato agradable';
        $producto->precio = 2900;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 5;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Torta de pandequeso';
        $producto->descripcion = 'Delicioso y suave producto para vivir un rato agradable';
        $producto->precio = 2500;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 5;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Dedo de queso';
        $producto->descripcion = 'Delicioso y suave producto para vivir un rato agradable';
        $producto->precio = 3300;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 5;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Dedo de queso y bocadillo';
        $producto->descripcion = 'Delicioso y suave producto para vivir un rato agradable';
        $producto->precio = 3500;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 5;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Mini pandebono';
        $producto->descripcion = 'Delicioso y suave producto para vivir un rato agradable';
        $producto->precio = 2500;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 5;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Torta de zanahoria';
        $producto->descripcion = 'Delicioso y suave producto para vivir un rato agradable';
        $producto->precio = 3500;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 5;
        $producto->save();

        #Congelados

        $producto= new Producto();
        $producto->nombre = 'Empanadas de carne paquete x10 und';
        $producto->descripcion = 'Productos congelados para toda ocasión';
        $producto->precio = 20000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 6;
        $producto->save();

        
        $producto= new Producto();
        $producto->nombre = 'Empanadas especiales paquete x10 und';
        $producto->descripcion = 'Productos congelados para toda ocasión';
        $producto->precio = 23000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 6;
        $producto->save();

        
        $producto= new Producto();
        $producto->nombre = 'Empanadas XS paquete x50 und';
        $producto->descripcion = 'Productos congelados para toda ocasión';
        $producto->precio = 17000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 6;
        $producto->save();

        
        $producto= new Producto();
        $producto->nombre = 'Empanadas S paquete x36 und';
        $producto->descripcion = 'Productos congelados para toda ocasión';
        $producto->precio = 26000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 6;
        $producto->save();

        #Arepas congeladas
        $producto= new Producto();
        $producto->nombre = 'Arepa de queso paquete x5 und';
        $producto->descripcion = 'Productos congelados para toda ocasión';
        $producto->precio = 16000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 6;
        $producto->save();

        
        $producto= new Producto();
        $producto->nombre = 'Arepa de huevo paquete x5 und';
        $producto->descripcion = 'Productos congelados para toda ocasión';
        $producto->precio = 12000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 6;
        $producto->save();

        
        $producto= new Producto();
        $producto->nombre = 'Arepa de huevo revuelto paquete x5 und';
        $producto->descripcion = 'Productos congelados para toda ocasión';
        $producto->precio = 13500;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 6;
        $producto->save();

        
        $producto= new Producto();
        $producto->nombre = 'Plancherotti paquete x4 und';
        $producto->descripcion = 'Productos congelados para toda ocasión';
        $producto->precio = 13000;
        $producto->stock = 100;
        $producto->id_sabor = 2;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 6;
        $producto->save();

        #Jugos

        
        $producto= new Producto();
        $producto->nombre = 'Jarra de jugo en agua';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 5500;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Jarra de jugo en leche';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 7400;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Jugo en agua grande';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 3500;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Jugo en agua pequeño';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 2500;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Jugo en leche grande';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 5300;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Jugo en leche pequeño';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 4000;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Jarra de jugo en agua';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 5500;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Jugo Hit';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 2400;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Jugo Hit en caja';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 2300;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Avena';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 3400;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Milo grande';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 5200;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 2;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Milito';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 3200;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Tinto';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 1500;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Aromatica';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 1500;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Pintado';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 2900;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Pintadito';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 2300;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Vaso gaseosa';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 1000;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Gaseosa 350 ml';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 2700;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Gaseosa 250 ml';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 2200;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Gaseosa 1.5';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 4600;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Agua en botella';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 2700;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Agua H2O';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 3900;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Malta';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 2900;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'No retornable';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 3100;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();

        $producto= new Producto();
        $producto->nombre = 'Gatorade';
        $producto->descripcion = 'Nuestras bebidas combinan perfecto con lo que sea';
        $producto->precio = 4200;
        $producto->stock = 100;
        $producto->id_sabor = 1;
        $producto->id_rango_precio = 1;
        $producto->id_tipo_producto = 7;
        $producto->save();
        


    }

}
