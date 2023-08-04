@extends('layouts.amd')
@section('title'.'Gestion de productos')
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
@if ($message=Session::get('mensaje'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Productos</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <div class="card">
                {{-- <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Productos</h4>

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
                            <a class="dropdown-item" type="button" href="{{ route('products.create') }}">Agregar</a>

                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Action</button>

                        </div>
                        </div>
                    </div> --}}

                    <li class="nav-item d-none d-lg-flex">
                        @if ($categories)
                            @if($providers)
                                <a class="nav-link" href="{{ route('products.create') }}" ><span class="btn btn-primary">Registrar producto</span></a>
                            @else
                                <a class="nav-link disabled" href="{{ route('products.create') }}" ><span class="btn btn-primary">Registrar producto</span></a>
                                <div class="alert alert-danger">
                                    <p><b>Debe ingresar primero un Proveedor</b></p>
                                </div>
                            @endif
                        @else
                                <a class="nav-link disabled" href="{{ route('products.create') }}" ><span class="btn btn-primary">Registrar producto</span></a>
                                <div class="alert alert-danger">
                                    <p><b>Debe ingresar primero una categoria</b></p>
                                </div>
                        @endif
                    </li>

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>

                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Stock</th>
                                    <th>Categoria</th>
                                    <th>Estado</th>

                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <th scope="row">{{$product->id  }}</th>

                                    <td>
                                    <a href="{{ route('products.show',$product) }}">{{$product->name  }}</a>
                                    </td>
                                    <td>{{$product->stock }}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td style="width: 150px; height: 10px;"><a class=" jsgrig-button jsgrid-edit-button btn btn-success"><small>{{$product->status  }}</small><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                      </svg></a>
                                      </td>



                                    <td style="width: 150px;">
                                    {!! Form::open(['route'=>['products.destroy', $product],'method'=>'DELETE'])!!}
                                    <a class="jsgrig-button jsgrid-edit-button btn btn-primary" href="{{ route('products.edit',$product) }}" title="Editar">
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
                        {{  $products->render() }}
                    </div>

                </div>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <strong>
                CATALOGO DE PRODUCTOS
            </strong>
            <a href="#" class="badge badge-success">Ver carrito</a>
        </div>


    </div>
    <div class="row">
        @foreach ($products as $pro )
        <div class="col-3">
            <div class="card text-center justify-center">
                <div class="container align-content-center">
                    <img class="card-img-top"
                    src="/img/imagenes/{{ $pro->image }}"
                    alt="Title"
                    title="Categoria"
                    style="height: 150px;width: 100px;"
                    data-toggle="popover"
                    data-trigger="hover"
                    data-content="{{ $pro->category->name }}">
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $pro->name }}</h4>
                    <p class="card-text">Bs{{ $pro->price }}</p>

                    <form action="btnAccion" method="post">
                        <input type="text" name="id" id="" value="{{ $pro->id }}">
                        <input type="text" name="name" id="name" value="{{ $pro->name }}">
                        <input type="text" name="price" id="price" value="{{ $pro->price }}">
                        <input type="text" name="stock" id="stock" value="{{ $pro->stock }}">

                    <button class="btn btn-primary"
                        type="submit"
                        name="btnAccion"
                        value="Agregar">
                        Agregar al carrito</button>
                    </form>

                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>
<div><br><br></div>
@endsection
@section('scripts')
<script>
    $(function(){
    $('[data-toggle="popover"]').popover()
});
</script>

@endsection
