@extends('layouts.homeo')

@section('content')
    <ul><b>
        <li>
            <a href="{{ route('order.index')}}" class="text-size-20 margin-bottom-20 text-dark text-center"> Listado de órdenes</a>
        </li>
    </ul>


    <hr>
    <h1>Orden # {{ $order->id }}</h1>
    <ul>
        <li>Usuario: {{ $order->user->name}}</li>
        <li> Productos:
            @foreach ($order->products as $product)
                {{ $product->name }}
            @endforeach
        </li>
    </ul>
    @can ('admin')
    <form action=" {{ route('order.destroy', [$order]) }}" method="POST">
        @method('DELETE')
        @csrf

        <button class="submit-form button background-primary text-white" type="submit">Eliminar</button>
    @endcan
    </form>
@endsection
