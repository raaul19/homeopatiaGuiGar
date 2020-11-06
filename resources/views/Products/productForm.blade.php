<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Captura de Producto</title>
</head>
<body>
    <h1>Crear Producto Nuevo</h1>
    <form action="{{ route('products.store') }}" method="POST">
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
