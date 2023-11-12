@extends('templates.main-Admin')
@section('title', 'Panel Rango Precios')
@section('content')
    <h1 class="text-center">Edicion de Rango Precios</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('rangoPrecios.update', $rango_precio) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $rango_precio->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label for="precio_min" class="form-label">Precio Minimo</label>
                        <input type="number" class="form-control" id="precio_min" name="precio_min"
                            value="{{ $rango_precio->precio_min }}">
                    </div>
                    <div class="mb-3">
                        <label for="precio_max" class="form-label">Precio Maximo</label>
                        <input type="number" class="form-control" id="precio_max" name="precio_max"
                            value="{{ $rango_precio->precio_max }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
