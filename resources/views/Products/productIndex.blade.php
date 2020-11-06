<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homeopatía GuiGar</title>
</head>
<body>
    <a href="{{ route('products.create') }}">Nuevo Producto</a>
    <hr>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Foto</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>
                    <a href="{{ route('products.show', [$product])}}"> {{ $product->name}} </a>
                </td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->photo }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
