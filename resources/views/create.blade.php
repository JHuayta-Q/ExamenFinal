@extends('plantilla')
@section('contenido')
    <h1 class="text-center">Registro de Producto</h1>
    <form action="{{ route('producto.create') }}" method="POST">
        @csrf
        <br>
        <div class="form-group row">
            <div class="col-sm-12">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-sm-12">
            <input type="text" class="form-control"name="price" id="price" placeholder="Price">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-sm-12">
            <input type="text" class="form-control"name="stok" id="stok" placeholder="Stok">
            </div>
        </div>
        <br>
        <div>
            <button type="submit" class="btn btn-success col-2">Guardar</button>
            <a href="{{ route('producto.index') }}" class="btn btn-danger col-2">Cancelar</a>
        </div>
        </form>
@endsection