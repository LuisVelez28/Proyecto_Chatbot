<?php

namespace App\Http\Controllers;

use App\models\Sabor;
use Illuminate\Http\Request;

class SaboresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sabor= Sabor::all();
        return view('cuenta_Admin.sabor.create',compact('sabor'));
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
        $sabor= new Sabor();
        $sabor->nombre=$request->nombre;
        $sabor->descripcion=$request->descripcion;
        $sabor->save();
        return redirect()->route('sabores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sabor $sabor)
    {
        $sabor= Sabor::find($sabor->id);
        return view('sabor.',compact('sabor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sabor $sabor)
    {
        $sabor= Sabor::find($sabor->id);
        return view('sabor.edit',compact('sabor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sabor $sabor)
    {
        $sabor= Sabor::find($sabor->id);
        $sabor->nombre=$request->nombre;
        $sabor->descripcion=$request->descripcion;
        $sabor->save();
        return redirect()->route('sabores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sabor $sabor)
    {
        $sabor= Sabor::find($sabor->id);
        $sabor->delete();
        return redirect()->route('sabores.index');
    }
}
