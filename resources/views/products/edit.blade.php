@extends('layouts.app')
@section('title', 'productos Editar')
@section('content')
    <div class="container">
    <h1>editar este producto</h1>
    <form action="{{route('products.update', $product)}}" class="border col-6 p-5" method="POST">
        @csrf
        @method('put')
        <label >
            Nombre:
            <br>
            <input type="text"  class="form-control" name="name" value="{{$product->name}}">
        </label>

        @error('name')
            <br>
            {{$message}}
            <br>
        @enderror
        <br>
        <label >
            
            Referencia:
            <br>
            <input type="text"  class="form-control" name="reference" value="{{$product->reference}}">
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
            <input type="number"  class="form-control" name="price" value="{{$product->price}}">
        </label>

        @error('price')
        <br>
        {{$message}}
        <br>
        @enderror
        <br>
        <label >
            Stock:
            <br>
            <input type="number"  class="form-control" name="stock" value="{{$product->stock}}">
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