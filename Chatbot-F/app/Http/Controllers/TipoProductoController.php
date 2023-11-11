<?php

namespace App\Http\Controllers;

use App\Models\Tipo_producto;
use Illuminate\Http\Request;

class TipoProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipo_producto= Tipo_producto::all();
        return view('cuenta_Admin.tipoProducto.create',compact('productos','tipos_producto'));
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
        $tipo_producto= new Tipo_producto();
        $tipo_producto->nombre=$request->nombre;
        $tipo_producto->descripcion=$request->descripcion;
        $tipo_producto->save();
        return redirect()->route('tipoProductos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tipo_producto $tipo_producto)
    {
        $tipo_producto= Tipo_producto::find($tipo_producto->id);
        return view('tipo_producto.',compact('tipo_producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tipo_producto $tipo_producto)
    {
        $tipo_producto= Tipo_producto::find($tipo_producto->id);
        return view('tipo_producto.edit',compact('tipo_producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tipo_producto $tipo_producto)
    {
        $tipo_producto= Tipo_producto::find($tipo_producto->id);
        $tipo_producto->nombre=$request->nombre;
        $tipo_producto->descripcion=$request->descripcion;
        $tipo_producto->save();
        return redirect()->route('tipoProductos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tipo_producto $tipo_producto)
    {
        $tipo_producto= Tipo_producto::find($tipo_producto->id);
        $tipo_producto->delete();
        return redirect()->route('tipoProductos.index');
    }
}
