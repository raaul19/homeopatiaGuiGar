@extends('layouts.app')

@section('content')
    <a href="{{ route('products.index')}}">Listado de Productos</a>
    <a href="{{ route('products.edit', [$product->id])}}">Editar producto</a>



    <hr>
    <h1>Producto # {{ $product->id }}</h1>
    <ul>
        <li>Nombre: {{ $product->name }}</li>
        <li>Descripcion: {{ $product->description }}</li>
        <li>Price: {{ $product->price }}</li>
        <li>Foto: {{ $product->photo }}</li>

    </ul>

    <form action=" {{ route('products.destroy', [$product]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit"> Eliminar </button>

    </form>
@endsection
