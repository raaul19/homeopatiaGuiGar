@extends('layouts.homeo')

@section('content')
    <ul><b>
        <li>
            <a href="{{ route('products.index')}}" class="text-size-20 margin-bottom-20 text-dark text-center"> Listado de Productos</a>
        </li>
        <li>
            <a href="{{ route('products.edit', [$product->id])}}" class="text-size-20 margin-bottom-20 text-dark text-center">Editar producto</a>
        </li>
    </ul>



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

        <button class="submit-form button background-primary text-white" type="submit">Eliminar</button>

    </form>
@endsection
