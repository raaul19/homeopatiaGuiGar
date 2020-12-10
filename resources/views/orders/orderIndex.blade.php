@extends('layouts.homeo')

    @section('content')
    <hr>

    <table border="1" class="text-center">
        <h1> Listado de Órdenes </h1>

        <tr>
            <th>ID orden</th>
            <th>Usuario</th>
            <th>Tiempo</th>
        </tr>

        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user_id }}</td>
                <td>{{ $order->time }}</td>
            </tr>
        @endforeach
    </table>
    <hr>

@endsection

