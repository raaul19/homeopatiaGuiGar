<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Captura de Producto</title>
</head>
<body>
    <a href=" {{ route ('products.index')}}">Volver</a>
    <h1>Crear Producto Nuevo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(@isset($product))
        <form action="{{ route('products.update',[$product])}}" method="POST">
        @method('patch')
    @else
        <form action=" {{ route('products.store')}}" method="POST">
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
        <button type="submit">Aceptar</button>
    </form>
</body>
</html>
