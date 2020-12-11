@extends('layouts.homeo')

    @section('content')
    <hr>
    <a href="{{ route('order.create') }}" class="text-size-20 margin-bottom-20 text-dark text-center"><b>Añadir nueva orden</a>
    <table border="1" class="text-center">
        <h1> Listado de Órdenes </h1>

        <tr>
            <th>ID orden</th>
            <th>Usuario</th>
            <th>Productos</th>
        </tr>

        @foreach ($orders as $order)
            <tr>
                <td>
                    <a href="{{ route('order.show', [$order])}}"> {{ $order->id}} </a>
                </td>
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

