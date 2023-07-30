@extends('layouts.amd')
@section('title'.'Registrar productos')
@section('styles')
@endsection

@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Registro de productos</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de productos</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de productos</h4>
                    </div>
                </div>
                {!! Form::open(['route'=>'products.store', 'method'=>'post', 'files'=>'true']) !!}
                <div class="form-group">
                  <label for="name" class="form-label">Nombre</label>
                  <input type="text" name="name" id="name" required aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="price" class="form-label">Precio de venta</label>
                  <input type="number" name="price" id="price" required aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="category_id" class="form-label">Categoria</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="">Seleccionar</option>
                        @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="provider_id" class="form-label">Proveedor</label>
                    <select class="form-control" name="provider_id" id="provider_id">
                        <option value="">Seleccionar</option>
                        @foreach ($providers as $provider )
                        <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-file mb-4">
                    <input type="file" class="custom-file-input" id="picture" name="picture" lang="es">
                    <label for="image" class="custom-file-label">Seleccionar Archivo</label>
                </div>



                <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                <a href="{{ route('products.index') }}" class="btn btn-danger">Cancelar</a>
            {!! Form::close() !!}
            </div>
        </div>

    </div>

</div>
@endsection
@section('scripts')

@endsection
