<?php

namespace App\Http\Controllers;

use App\Models\Rango_precio;
use Illuminate\Http\Request;

class RangoPreciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rangos_precios= Rango_precio::all();
        return view('cuenta_Admin.rangoPrecio.create',compact('rangos_precios'));
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
        $rango_precio= new Rango_precio();
        $rango_precio->nombre=$request->nombre;
        $rango_precio->descripcion=$request->descripcion;
        $rango_precio->save();
        return redirect()->route('rangos_precios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rango_precio $rango_precio)
    {
        $rango_precio= Rango_precio::find($rango_precio->id);
        return view('rango_precio.',compact('rango_precio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rango_precio $rango_precio)
    {
        $rango_precio= Rango_precio::find($rango_precio->id);
        return view('cuenta_Admin.rangoPrecio.edit',compact('rango_precio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rango_precio $rango_precio)
    {
        $rango_precio= Rango_precio::find($rango_precio->id);
        $rango_precio->nombre=$request->nombre;
        $rango_precio->descripcion=$request->descripcion;
        $rango_precio->save();
        return redirect()->route('rangoPrecios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rango_precio $rango_precio)
    {
        $rango_precio= Rango_precio::find($rango_precio->id);
        $rango_precio->delete();
        return redirect()->route('rangoPrecios.index');
    }
}
