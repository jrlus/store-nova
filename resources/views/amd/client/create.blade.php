@extends('layouts.amd')
@section('title'.'Registrar clientes')
@section('styles')
@endsection

@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Registro de clientes</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de clientes</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de clientes</h4>
                    </div>
                </div>
                {!! Form::open(['route'=>'clients.store', 'method'=>'post']) !!}
                <div class="form-group">
                  <label for="name" class="form-label">Nombre</label>
                  <input type="text" name="name" id="name" required aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="cedula" class="form-label">Cedula</label>
                  <input type="text" name="cedula" id="cedula" required aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="rif" class="form-label">RIF</label>
                    <input type="text" name="rif" id="rif" required aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <label for="address" class="form-label">Direccion Fiscal</label>
                    <input type="text" name="address" id="address" required aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <label for="phone" class="form-label">Telefono</label>
                    <input type="text" name="phone" id="phone" aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email"  aria-describedby="helpId" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="form-text text-muted">Este campo es opcional</small>
                </div>



                <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                <a href="{{ route('clients.index') }}" class="btn btn-danger">Cancelar</a>
            {!! Form::close() !!}
            </div>
        </div>

    </div>

</div>
@endsection
@section('scripts')
{!! Html::script('') !!}
@endsection
