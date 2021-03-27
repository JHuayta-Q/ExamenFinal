@extends('plantilla')
@section('contenido')
       <h1 class="text-center">Listar Productos</h1>
       <br>
       <div class class="col-sm-8 mb-4">
        @if(session('mensaje'))
    <div class="alert alert-success">{{session('mensaje')}}</div>
        @endif
    <table class="table caption-top">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Producto as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->stok }}</td>
            </tr>
            @endforeach
        </tbody>
        </table> 
        <a href="{{ route('producto.form') }}" class="btn btn-primary">Registrar</a>
@endsection
