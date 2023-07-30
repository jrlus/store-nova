@extends('layouts.amd')
@section('title'.'Gestion de ventas')
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
    <a class="nav-link" href="{{ route('sales.create') }}"><span class="btn btn-primary">+Crear nuevo</span></a>

</li>
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Ventas</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">>Registrar</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <!--h4 class="card-title mb-2">Ventas</!--h4-->

                        <!--div class="btn-group">
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
                            <a class="dropdown-item" type="button" href="{{ route('sales.create') }}">Agregar</a>

                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Action</button>

                        </div>
                        </!--div>
                    </div-->

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Cliente</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                    <th style="width: 140px">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sales as $sale)
                                <tr >
                                    <th scope="row">
                                    <a href="{{ route('sales.show', $sale)  }}">{{$sale->id}}</a>
                                    </th>
                                    <th scope="row">{{$sale->sale_date}}</th>
                                    <th scope="row">{{ $sale->client->name }}</th>
                                    <th scope="row">{{$sale->total}}</th>
                                    <th scope="row">{{$sale->status}}</th>


                                    <td style="width: 100px;">
                                    {!! Form::open(['route'=>['sales.destroy', $sale],'method'=>'DELETE'])!!}
                                    <a class="jsgrig-button jsgrid-edit-button" href="{{ route('sales.edit',$sale) }}" title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <button class="jsgrig-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar" href="">
                                        <i class="far fa-trash-alt"></i></button>

                                   <a href="" class="jsgrid-button jsgrid-edit-button">
                                    <i class="far fa-file-pdf"></i>
                                   </a>
                                   <a href="" class="jsgrid-button jsgrid-edit-button">
                                    <i class="far fa-print"></i>
                                   </a>
                                   <a href="{{ route('sales.show', $sale)  }}" class="jsgrid-button jsgrid-edit-button">
                                    <i class="far fa-eye"></i>
                                   </a>


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
