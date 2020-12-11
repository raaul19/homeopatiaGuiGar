@extends('layouts.homeo')

    @section('content')
    <hr>

    <table border="1" class="text-center">
        <h1> Listado de Órdenes </h1>

        <tr>
            <th>ID orden</th>
            <th>Usuario</th>
            <th>Productos</th>
        </tr>

        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>
                    @foreach ($order->products as $product)
                        {{ $product->name }}
                    @endforeach
                </td>

            </tr>
        @endforeach
    </table>
    <hr>

@endsection

