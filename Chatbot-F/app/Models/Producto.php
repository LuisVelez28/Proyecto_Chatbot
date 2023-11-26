<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'stock', 'id_sabor', 'id_rango_precio', 'id_tipo_producto'
    ];

    public function sabor()
    {
        return $this->belongsTo(Sabor::class, 'id_sabor');
    }
    public function rangoPrecio()
    {
        return $this->belongsTo(RangoPrecio::class, 'id_rango_precio');
    }
    public function tipoProducto()
    {
        return $this->belongsTo(Tipo_Producto::class, 'id_tipo_producto');
    }


}

