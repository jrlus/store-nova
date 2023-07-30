@extends('layouts.amd')
@section('title'.'Gestion de clientes')
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
<li class="nav-item d-none d-lg-flex">
    <a class="nav-link" href="{{ route('clients.create') }}"><span class="btn btn-primary">Crear nuevo</span></a>

</li>
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Clientes</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <div class="card">
                <!--div class="card-body">
                    <div-- class="d-flex justify-content-between">
                        <h4 class="card-title">Clientes</h4>

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
                            <a class="dropdown-item" type="button" href="{{ route('clients.create') }}">Agregar</a>

                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Action</button>

                        </div>
                        </div>
                    </div-->

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>

                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Cedula</th>
                                    <th>RIF</th>
                                    <th>Direccion Fiscal</th>
                                    <th>Telefono</th>
                                    <th>Email</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                <tr>
                                    <th scope="row">{{$client->id  }}</th>

                                    <td>
                                    <a href="{{ route('clients.show',$client) }}">{{$client->name  }}</a>
                                    </td>
                                    <td>{{ $client->cedula }}</td>
                                    <td>{{$client->rif  }}</td>
                                    <td>{{$client->address}}</td>
                                    <td>{{$client->phone}}</td>
                                    <td>{{$client->email}}</td>


                                    <td style="width: 50px;">
                                    {!! Form::open(['route'=>['clients.destroy', $client],'method'=>'DELETE'])!!}
                                    <a class="jsgrig-button jsgrid-edit-button" href="{{ route('clients.edit',$client) }}" title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <button class="jsgrig-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar" href="">
                                        <i class="far fa-trash-alt"></i></button>
                                    {!! Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>

                        </table>

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
