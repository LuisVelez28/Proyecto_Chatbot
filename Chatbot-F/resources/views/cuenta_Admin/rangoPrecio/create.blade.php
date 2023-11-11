@extends('templates.main-Admin')
@section('title', 'Panel productos')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Rango Precios</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('rangoPrecios.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="placa" class="form-label">Nombre</label>
                        <input type="string" class="form-control" id="placa" name="placa">
                    </div>
                    <div class="mb-3">
                        <label for="precio_min" class="form-label">Precio Minimo</label>
                        <input type="Integer" class="form-control" id="marca" name="marca">
                    </div>
                    <div class="mb-3">
                        <label for="precio_max" class="form-label">Precio Maximo</label>
                        <input type="integer" class="form-control" id="capacidad" name="capacidad">
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio Minimo</th>
                    <th scope="col">Precio Maximo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rangoPrecios as $rangoPrecio)
                    <tr>
                        <td>{{ $rangoPrecio->nombre }}</td>
                        <td>{{ $rangoPrecio->precio_min }}</td>
                        <td>{{ $rangoPrecio->precio_max }}</td>
                        <td>
                            <form action="{{ route('rangoPrecios.destroy', $rangoPrecio->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                <a href="{{ route('rangoPrecios.edit', $rangoPrecio->id) }}"
                                    class="btn btn-warning">Editar</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
