@extends('layouts.amd')
@section('title'.'Gestion de Proveedores')
@section('styles')
<style type="text/css">
.unstyled-button
{
    border: none;
    padding: 0;
    background: none;
}
</style>
@endsection
@section('create')

@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Proveedores</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Proveedores</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <li class="nav-item d-none d-lg-flex">
            <a class="nav-link" href="{{ route('providers.create') }}"><span class="btn btn-primary">Registrar Proveedor</span></a>
        </li>
        <div class=" col-lg-12 grid-margin stretch-card">
            <div class="card">
                {{-- <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Proveedores</h4>

                        <div class="btn-group">
                            <h4 class="card-title">
                                <a href="">
                                    <i class="fas fa-download"></i>
                                    Exportar
                                </a>
                            </h4>
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" type="button" href="{{ route('providers.create') }}">Agregar</a>

                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Action</button>

                        </div>
                        </div>
                    </div> --}}

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>RIF</th>
                                    <th>email</th>
                                    <th>Telefono/Celular</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($providers as $provider)
                                <tr>
                                    <th scope="row">{{$provider->id  }}</th>

                                    <td>
                                    <a href="{{ route('providers.show',$provider) }}">{{$provider->name  }}</a>
                                    </td>
                                    <td>{{ $provider->rif }}</td>
                                    <td>{{$provider->email  }}</td>
                                    <td>{{$provider->phone  }}</td>


                                    <td style="width: 150px;">
                                    {!! Form::open(['route'=>['providers.destroy', $provider],'method'=>'DELETE'])!!}
                                    <a class="jsgrig-button jsgrid-edit-button btn btn-primary" href="{{ route('providers.edit',$provider) }}" title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <button class="jsgrig-button jsgrid-delete-button unstyled-button btn btn-danger" type="submit" title="Eliminar" href="">
                                        <i class="far fa-trash-alt"></i></button>
                                    {!! Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>

                        </table>
                        {{ $providers->render() }}
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<div><br><br></div>
@endsection
@section('scripts')

@endsection
