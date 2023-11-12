@extends('templates.main-Admin')
@section('title', 'Panel Productos')
@section('content')
    <h1 class="text-center">Edicion de Productos</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="formulario" method="post" action="{{ route('productos.update', $producto) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            value="{{ $producto->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion"
                            value="{{ $producto->descripcion }}">
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio"
                            value="{{ $producto->precio }}">
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock"
                            value="{{ $producto->stock }}">
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Sabor</label>
                        <select class="form-control" name="id_sabor" id="sabores">
                            @foreach ($tipos_sabores as $sabores)
                                @if ($sabores->id_sabor = $tipo_sabor)
                                    <option value="{{ $sabores->id }}" selected>{{ $sabores->nombre }}</option>
                                @else
                                    <option value="{{ $sabores->id }}">{{ $sabores->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Rango precio</label>
                        <select class="form-control" name="id_rango_precio" id="rango_precios">
                            @foreach ($rangos_precios as $rango_precios)
                                @if ($rango_precios->id_rango_precio = $rango_precio)
                                    <option value="{{ $rango_precios->id }}" selected>{{ $rango_precios->nombre }}</option>
                                @else
                                    <option value="{{ $rango_precios->id }}">{{ $rango_precios->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo producto</label>
                        <select class="form-control" name="id_tipo_producto" id="tipo_productos">
                            @foreach ($tipos_productos as $tipo_productos)
                                @if ($tipo_productos->id_tipo_producto = $tipo_producto)
                                    <option value="{{ $tipo_productos->id }}" selected>{{ $tipo_productos->nombre }}</option>
                                @else
                                    <option value="{{ $tipo_productos->id }}">{{ $tipo_productos->nombre }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
