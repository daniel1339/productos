@extends('layouts.app')
@section('title', 'producto')
@section('content')
    <h1>Producto: {{$product->name}}</h1>

    <p>
        Referencia {{$product->reference}}
        <br> Precio {{$product->price}}
        <br> Stock {{$product->stock}}
    </p>
@endsection