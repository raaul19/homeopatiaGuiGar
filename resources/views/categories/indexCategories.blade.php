@extends('layouts.homeo')

    @section('content')
    <hr>

    <table border="1" class="text-center">
        <h1> Listado de Productos y sus tipos</h1>

        @foreach($product_types as $product_type)
            <h3>{{ $product_type->type}}</h3>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product_type->products as $product)
                    <tr>
                        <td>
                            <a href="{{ route('products.show', [$product])}}"> {{ $product->name}} </a>
                        </td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->photo }}</td>
                    </tr>
                @endforeach
            </tbody>
        @endforeach
    </table>
    <hr>

@endsection

