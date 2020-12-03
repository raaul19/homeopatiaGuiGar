@extends('layouts.homeo')

@section('content')
    <a href=" {{ route ('products.index')}}" class="text-size-20 margin-bottom-20 text-dark text-center"><b>Volver</a>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="section background-white">
        <div class="s-12 m-12 l-4 center">
          <div class="padding-2x">
            <h1 class="text-center">Producto</h1>
            @if(@isset($product))
                <form action="{{ route('products.update',[$product])}}" method="POST" class="customform">
                @method('patch')
            @else
                <form action=" {{ route('products.store')}}" method="POST" class="customform">
            @endif
                @csrf
                <label for="name">Nombre:</label>
                <input type="text" name="name" value="{{ old('name') ?? $product->name ?? ''}}">
                <br>

                <label for="description">Descripcion:</label>
                <textarea name="description"> {{ old('description') ?? $product->description ?? ''}} </textarea>
                <br>

                <label for="price">Precio:</label>
                <input type="number" name="price" value="{{ old('price') ?? $product->price ?? ''}}">
                <br>

                <label for="photo">Foto:</label>
                <input type="text" name="photo" value="{{ old('photo') ?? $product->photo ?? ''}}">
                <br>
                <button class="submit-form button background-primary text-white" type="submit">Aceptar</button>
            </form>
          </div>
        </div>
    </section>

@endsection
