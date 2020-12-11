@extends('layouts.homeo')

@section('content')

    @include('partials.form-error')

    <section class="section background-white">
        <div class="s-12 m-12 l-4 center">
          <div class="padding-2x">
            <h1 class="text-center">Orden</h1>
                @if(@isset($order))
                    <form action="{{ route('order.update',[$order])}}" method="POST" class="customform">
                    @method('patch')
                @else
                    <form action=" {{ route('order.store')}}" method="POST" class="customform">
                @endif
                    @csrf
                    <label for="user_id">Usuarios:</label>
                    <select name="user_id">
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>

                    <label for="product_id">Productos:</label>
                    <select name="product_id">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}"> {{ $product->name}} </option>
                        @endforeach
                    </select>

                <button class="submit-form button background-primary text-white" type="submit">Aceptar</button>
            </form>
          </div>
        </div>
    </section>

@endsection
