@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear producto') }}</div>

                <div class="card-body">
                    <form action="{{route('products.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">{{ __('Descripción') }}</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-2 col-form-label">{{ __('Precio') }}</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="price" name="price" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stock" class="col-sm-2 col-form-label">{{ __('Stock') }}</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="stock" name="stock" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2 d-flex">
                                <div>
                                    <a href="{{route('products')}}" class="btn btn-secondary">{{ __('Cancelar') }}</a>
                                </div>
                                <div class="ml-3">
                                    <button type="submit" class="btn btn-primary">{{ __('Crear') }}</button>
                                </div>

                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection