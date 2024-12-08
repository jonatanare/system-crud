@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar producto') }}</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('products.update', $product->id) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="name">{{ __('Nombre') }}</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('Descripción') }}</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ $product->description }}</textarea>
                            @if ($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="price">{{ __('Precio') }}</label>
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}">
                            @if ($errors->has('price'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('price') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="stock">{{ __('Stock') }}</label>
                            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" value="{{ $product->stock }}">
                            @if ($errors->has('stock'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('stock') }}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection