<?php

namespace App\Http\Controllers;

use App\Models\RangoPrecio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RangoPrecioController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rangoPrecios= RangoPrecio::all();
        return view('cuenta_Admin.rangoPrecio.create',compact('rangoPrecios'));
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
        $rango_precio= new RangoPrecio();
        $rango_precio->nombre=$request->nombre;
        $rango_precio->precio_min=$request->precio_min;
        $rango_precio->precio_max=$request->precio_max;
        $rango_precio->save();
        return redirect()->route('rangoPrecios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(RangoPrecio $rango_precio)
    {
        $rango_precio= RangoPrecio::find($rango_precio->id);
        return view('rango_precio.',compact('rango_precio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(/*RangoPrecio*/ $rango_precio)
    {
        $rango_precio= RangoPrecio::find($rango_precio);
        return view('cuenta_Admin.rangoPrecio.edit',compact('rango_precio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, /*RangoPrecio*/ $rango_precio)
    {
        $rango_precio= RangoPrecio::find($rango_precio);
        $rango_precio->nombre=$request->nombre;
        $rango_precio->precio_min=$request->precio_min;
        $rango_precio->precio_max=$request->precio_max;
        $rango_precio->save();
        return redirect()->route('rangoPrecios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(/*RangoPrecio*/ $rango_precio)
    {
        $rango_precio= RangoPrecio::find($rango_precio);
        $rango_precio->delete();
        return redirect()->route('rangoPrecios.index');
    }
}
