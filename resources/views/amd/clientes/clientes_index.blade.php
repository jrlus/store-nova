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
@section('usuario')
{{-- $user --}}
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h1 class="page-title">Clientes<i class="fa fa-users"></i></h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clientes</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <li class="nav-item d-none d-lg-flex">
            <a class="nav-link" href="{{ route('clients.create') }}"><span class="btn btn-primary">Registrar Cliente</span></a>
        </li>
        @if(session("mensaje"))
        <div class="alert alert-{{session('tipo') ? session("tipo") : "info"}}">
            {{session('mensaje')}}
        </div>
    @endif
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
                        <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="">
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
                                @foreach($clientes as $client)
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


                                    <td style="width: 150px;">
                                    {!! Form::open(['route'=>['clients.destroy', $client],'method'=>'DELETE'])!!}
                                    <a class="jsgrig-button jsgrid-edit-button btn btn-primary" href="{{ route('clients.edit',$client) }}" title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <button class="jsgrig-button jsgrid-delete-button unstyled-button btn btn-danger" type="submit" title="Eliminar" href="">
                                        <i class="fa fa-trash"></i></button>
                                    {!! Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>

                        </table>
                        {{ $clients->render() }}
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<div><br><br></div>
@endsection
@section('scripts')

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>


@endsection
