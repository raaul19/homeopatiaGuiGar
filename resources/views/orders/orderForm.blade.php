@extends('layouts.homeo')

@section('content')

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
            <h1 class="text-center">Orden</h1>
                <form action=" {{ route('order.store')}}" method="POST" class="customform">
                @csrf
                //
                <button class="submit-form button background-primary text-white" type="submit">Aceptar</button>
            </form>
          </div>
        </div>
    </section>

@endsection
