@extends('layouts.amd')
@section('title'.'Gestion de compras')
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
    <a class="nav-link" href="{{ route('purchases.create') }}"><span class="btn btn-primary">Crear nuevo</span></a>

</li>
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Compras</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registrar</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <div class="card">
                <!--div class="card-body">
                    <div-- class="d-flex justify-content-between">
                        <h4 class="card-title">Compras</h4>

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
                            <a class="dropdown-item" type="button" href="{{ route('purchases.create') }}">Agregar</a>

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
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                    <th style="width: 140px">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($purchases as $purchase)
                                <tr >
                                    <th scope="row">
                                    <a href="{{ route('purchases.show', $purchase)  }}">{{$purchase->id}}</a>
                                    </th>
                                    <th scope="row">{{$purchase->purchase_date}}</th>
                                    <th scope="row">{{$purchase->total}}</th>
                                    <th scope="row">{{$purchase->status}}</th>


                                    <td style="width: 100px;">
                                    {!! Form::open(['route'=>['purchases.destroy', $purchase],'method'=>'DELETE'])!!}
                                    <a class="jsgrig-button jsgrid-edit-button" href="{{ route('purchases.edit',$purchase) }}" title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <button class="jsgrig-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar" href="">
                                        <i class="far fa-trash-alt"></i></button>

                                   <a href="{{ route('purchases.pdf', $purchase)  }}" class="jsgrid-button jsgrid-edit-button">
                                    <i class="far fa-file-pdf"></i>
                                   </a>
                                   <a href="{{ route('purchases.show', $purchase)  }}" class="jsgrid-button jsgrid-edit-button">
                                    <i class="far fa-print"></i>
                                   </a>
                                   <a href="{{ route('purchases.show', $purchase)  }}" class="jsgrid-button jsgrid-edit-button">
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
