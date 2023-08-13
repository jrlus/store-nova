@extends("layouts.amd")
@section("titulo", "Ventas")
@section('stylescss')
@section("content")
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <h1>Ventas Realizadas<i class="fa fa-list"></i></h1>
            @if(session("mensaje"))
            <div class="alert alert-{{session('tipo') ? session("tipo") : "info"}}">
                {{session('mensaje')}}
            </div>
            @endif

            <div class="table-responsive">
                <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        <th>Cant. Vendida</th>
                        <th style="width: 140px">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ventas as $venta)
                        <tr>
                            <td>{{ $venta->id }}</td>
                            <td>{{$venta->created_at}}</td>
                            <td>{{$venta->cliente->name}}</td>
                            <td>Bs{{number_format($venta->totalfinal, 2)}}</td>
                            <td>{{ $venta->productos->count()}}</td>
                            <td>
                                <a class="btn btn-info" href="{{route("ventas.ticket", ["id"=>$venta->id])}}">
                                    <i class="fa fa-print"></i>
                                </a>
                                <a class="btn btn-success" href="{{route("ventas.show", $venta)}}">
                                    <i class="fa fa-info"></i>
                                </a>
                            </td>
                            <td style="width: 20px">
                                <form action="{{route("ventas.destroy", [$venta])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
@endsection
