@extends('layouts.homeo')

    @section('content')
    <hr>

    <table border="1" class="text-center">
        <h1> Listado de Categorias de productos</h1>
        <thead>
            <tr>
                <th>Category</th>
            </tr>
        </thead>
        @foreach($categories as $category)
            <tbody>
                <td>{{ $category->category}}</td>
            </tbody>
        @endforeach
    </table>
    <hr>

@endsection

