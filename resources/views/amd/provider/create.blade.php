@extends('layouts.amd')
@section('title'.'Registrar proveedores')
@section('styles')
@endsection

@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Registro de proveedores</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de proveedores</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de proveedores</h4>
                    </div>
                </div>
                {!! Form::open(['route'=>'providers.store', 'method'=>'post']) !!}
                <div class="form-group">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" id="name" required aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" id="email" required aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="rif" class="form-label">Rif</label>
                  <input type="number" name="rif" id="rif" required aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="address" class="form-label">Direccion</label>
                    <input type="text" name="address" required id="address" aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <label for="phone" class="form-label">Telefono/Celular</label>
                    <input type="number" name="phone" required id="phone" aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>


                <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                <a href="{{ route('providers.index') }}" class="btn btn-danger">Cancelar</a>
            {!! Form::close() !!}
            </div>
        </div>

    </div>

</div>
@endsection
@section('scripts')

@endsection
