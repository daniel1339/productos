@extends('layouts.app')
@section('title', 'productos create')
@section('content')
    <div class="container">
    <h1>Crear un producto</h1>
    <form action="{{route('products.store')}}" class="border col-6 p-5" method="POST">
        @csrf
        <label >
            Nombre:
            <br>
            <input class="form-control" type="text" name="name">
        </label>

        @error('name')
            <br>
            {{$message}}
            <br>
        @enderror
        <br>
        <label  >
            
            Referencia:
            <br>
            <input type="text" class="form-control" name="reference">
        </label>

        @error('reference')
        <br>
        {{$message}}
        <br>
        @enderror
        <br>
        <label >
            Precio:
            <br>
            <input class="form-control" type="number" name="price">
        </label>

        @error('price')
        <br>
        {{$message}}
        <br>
        @enderror
        <br>
        <label  >
            Stock:
            <br>
            <input type="number" class="form-control" name="stock">
        </label>

        @error('stock')
        <br>
        {{$message}}
        <br>
        @enderror
        <br>
        <button type="submit" class="btn btn-success">Enviar formulario</button>
    </form>
    </div>
@endsection