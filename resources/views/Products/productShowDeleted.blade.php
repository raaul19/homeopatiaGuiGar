@extends('layouts.homeo')

    @section('content')
    <a href=" {{ route ('products.index')}}" class="text-size-20 margin-bottom-20 text-dark text-center"><b>Volver</a>
    <hr>

    <table border="1" class="text-center">
        <thead class="text-center"> Productos agotados</thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Foto</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->photo }}</td>
            </tr>
        @endforeach
    </table>
    <hr>

@endsection

