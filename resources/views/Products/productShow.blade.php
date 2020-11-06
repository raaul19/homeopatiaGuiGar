<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver producto</title>
</head>
<body>
    <a href="{{ route('products.index')}}">Listado de Productos</a>
    <a href="{{ route('products.edit', [$product->id])}}">Editar producto</a>
    <hr>
    <h1>Producto # {{ $product->id }}</h1>
    <ul>
        <li>Nombre: {{ $product->name }}</li>
        <li>Descripcion: {{ $product->description }}</li>
        <li>Price: {{ $product->price }}</li>
        <li>Foto: {{ $product->photo }}</li>

    </ul>
</body>
</html>
