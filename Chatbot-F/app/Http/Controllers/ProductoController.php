<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Rango_precio;
use App\Models\Sabor;
use App\Models\Tipo_producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos= Producto::all();
        return view('cuenta_Admin.producto.create',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto= new Producto();
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->id_sabor=$request->id_sabor;
        $producto->id_tipo_producto=$request->id_tipo_producto;
        $producto->id_rango_precio=$request->id_rango_precio;
        $producto->save();
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        $producto= Producto::find($producto->id);
        return view('producto.',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $producto= Producto::find($producto->id);
        return view('producto.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $producto= Producto::find($producto->id);
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->precio=$request->precio;
        $producto->id_sabor=$request->id_sabor;
        $producto->id_tipo_producto=$request->id_tipo_producto;
        $producto->id_rango_precio=$request->id_rango_precio;
        $producto->save();
        return redirect()->route('productos.index');
    }
    public function destroy(Producto $producto)
    {
        $producto= Producto::find($producto->id);
        $producto->delete();
        return redirect()->route('productos.index');
    }
}

