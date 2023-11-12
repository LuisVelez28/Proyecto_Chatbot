@extends('templates.main-Admin')
@section('title', 'Panel productos')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Productos</h1>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('productos.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="string" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="string" class="form-control" id="descripcion" name="descripcion">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="integer" class="form-control" id="precio" name="precio">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="integer" class="form-control" id="stock" name="stock">
                    </div>
                    <div class="mb-3">
                        <label for="sabores" class="form-label">Sabor</label>
                        <select class="form-control" name="id_sabor" id="sabores">
                            @foreach ($tipos_sabores as $sabores)
                                <option value="{{ $sabores->id }}">{{ $sabores->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="rango_precios" class="form-label">Rango precios</label>
                        <select class="form-control" name="id_rango_precio" id="rango_precios">
                            @foreach ($rangos_precios as $rango_precios)
                                <option value="{{ $rango_precios->id }}">{{ $rango_precios->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tipo_productos" class="form-label">Tipo producto</label>
                        <select class="form-control" name="id_tipo_producto" id="tipo_productos">
                            @foreach ($tipos_productos as $tipo_productos)
                                <option value="{{ $tipo_productos->id }}">{{ $tipo_productos->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Sabor</th>
                    <th>Rango precio</th>
                    <th>Tipo producto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>{{ $sabores->nombre }}</td>
                        <td>{{ $rango_precios->nombre }}</td>
                        <td>{{ $tipo_productos->nombre }}</td>
                        <td>
                            <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
