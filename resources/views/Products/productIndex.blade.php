@extends('layouts.app')

@section('content')
    <a href="{{ route('products.create') }}" class="">Nuevo Producto</a>
    <hr>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Foto</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>
                    <a href="{{ route('products.show', [$product])}}"> {{ $product->name}} </a>
                </td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->photo }}</td>
            </tr>
        @endforeach
    </table>
@endsection
