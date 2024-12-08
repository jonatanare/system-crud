@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Detalle de producto</h2>
            <div class="card">
                <div class="card-header">
                    {{ $product->name }}
                </div>
                <div class="card-body">
                    <p>Precio: ${{ $product->price }}</p>
                    <p>Descripción: {{ $product->description }}</p>
                    <div class="d-flex">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este producto?')" class="ml-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection