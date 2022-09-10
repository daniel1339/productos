@extends('layouts.app')
@section('title', 'productos')
@section('content')
    <div class="container">
        <h1>Productos</h1>
        <br>
        <a href="{{route('products.create')}}" class="btn btn-primary" >Crear producto</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Referencia</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
              </tr>
            </thead>
            
            <tbody>
                @foreach ($products as $product) 
              <tr>

                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->reference}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->stock}}</td>

                    
                    <td><a href="{{route('products.show', $product)}}" class="btn btn-secondary">Mostrar</a></td>
                    <td><a href="{{route('products.edit', $product)}}" class="btn btn-success">editar</a></td>
                    
                    <td>
                        <form action="{{route('products.destroy',$product)}}" id="form-delete"  method="POST">
                    
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
               
              </tr>
              @endforeach
            </tbody>
          </table>
        
    
    </div>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script >
        $('#form-delete').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿ Estas seguro?',
            text: "¡Esto no se puede revertir!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, eliminarlo!'
            }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
                Swal.fire(
                'Eliminado!',
                'Registro eliminado.',
                'success'
                )
            }
        });
        });
        
    </script>
@endsection