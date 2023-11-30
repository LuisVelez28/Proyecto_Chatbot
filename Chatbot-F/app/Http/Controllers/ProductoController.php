<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\RangoPrecio;
use App\Models\Sabor;
use App\Models\Tipo_producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getProducto() {
        return response()->json(Producto::all(), 200);
    }
    public function getProductoById($id) {
        $producto = Producto::find($id);
        if(is_null($producto)) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json($producto,200);
    }
    public function index()
    {
        $productos= Producto::all();
        $tipos_sabores= Sabor::all();
        $tipos_productos= Tipo_producto::all();
        $rangos_precios= RangoPrecio::all();
        return view('cuenta_Admin.producto.create',compact('productos','tipos_sabores','tipos_productos','rangos_precios'));
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
        $producto->stock=$request->stock;
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
    public function edit(/*Producto*/ $producto)
    {
        $producto= Producto::find($producto);
        $tipo_sabor = $producto->id_sabor;
        $tipos_sabores= Sabor::all();
        $tipo_producto = $producto->id_tipo_producto;
        $tipos_productos= Tipo_producto::all();
        $rango_precio = $producto->id_rango_precio;
        $rangos_precios= RangoPrecio::all();
        return view('cuenta_Admin.producto.edit',compact('producto','tipos_sabores','tipos_productos','rangos_precios','tipo_sabor','tipo_producto','rango_precio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, /*Producto*/ $producto)
    {
        $producto= Producto::find($producto);
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
    
    public function empanadas(){
        $emp= Tipo_producto::where('nombre','empanada')->first()->id;
        dd($emp);
    }

}

