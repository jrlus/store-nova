@extends('layouts.amd')
@section('title'.'Edicion de productos')
@section('styles')
@endsection

@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Edicion de productos</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edicion de productos</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edicion de productos</h4>
                    </div>
                </div>

                {!! Form::model($product,['route'=>['products.update',$product], 'method'=>'PUT', 'files'=>'true']) !!}

                <div class="form-group">
                  <label for="name" class="form-label">Nombre</label>
                  <input type="text" name="name" id="name" value="{{ $product->name }}"
                   aria-describedby="helpId" class="form-control @error('name') is-invalid
                   @enderror" placeholder="" aria-describedby="helpId">
                   @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>
                          {{ $message }}
                      </strong>
                  </span>
                @enderror
                </div>
                <div class="form-group">
                  <label for="price" class="form-label">Precio de venta</label>
                  <input type="number" name="price" id="price" value="{{ $product->price }}"
                  aria-describedby="helpId" class="form-control @error('price') is-invalid
                  @enderror" placeholder="" aria-describedby="helpId">
                  @error('price')
                  <span class="invalid-feedback" role="alert">
                      <strong>
                          {{ $message }}
                      </strong>
                  </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="category_id" class="form-label">Categoria</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="">Seleccionar</option>
                        @foreach ($categories as $category )
                        <option value="{{ $category->id }}"
                            @if ($category->id_category == $product->category_id)
                                selected
                            @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="provider_id" class="form-label">Proveedor</label>
                    <select class="form-control" name="provider_id" id="provider_id">
                        <option value="">Seleccionar</option>
                        @foreach ($providers as $provider )
                        <option value="{{ $provider->id }}"
                            @if ($provider->id_provider == $product->provider_id)
                                selected
                            @endif
                            >{{ $provider->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-file mb-4">
                    <input type="file" class="custom-file-input dropify" id="picture" name="picture">
                    <label for="image" class="custom-file-label">Seleccionar Archivo</label>

                </div>





                <button type="submit" class="btn btn-primary mr-2">Editar</button>
                <a href="{{ route('products.index') }}" class="btn btn-danger">Cancelar</a>
            {!! Form::close() !!}
            </div>
        </div>

    </div>

</div>
@endsection
@section('scripts')


<script>
    $(document).ready(function() {
        $('.custom-file-input').on('change', function() {
            var fileName = $(this).val().replace(/.*\\/, '');
            $(this).next('.custom-file-label').html(fileName);
        });
    });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropify/4.3.0/dropify.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.dropify').dropify();
    });
    </script>
@endsection
