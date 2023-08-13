@extends("layouts.amd")
@section("titulo", "Compras")
@section('stylescss')
@section("content")
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <h1>Compras Realizadas<i class="fa fa-list"></i></h1>
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
                        <th>Proveedor</th>
                        <th>Total</th>
                        <th>Cant. Comprada</th>
                        <th style="width: 140px">Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($compras as $compra)
                        <tr>
                            <td>{{ $compra->id }}</td>
                            <td>{{$compra->created_at}}</td>
                            <td>{{$compra->provider->name}}</td>
                            <td>Bs{{number_format($compra->totalfinal, 2)}}</td>
                            <td>{{ $compra->productos->count()}}</td>
                            <td>
                                <a class="btn btn-info" href="">
                                    <i class="fa fa-print"></i>
                                </a>
                                <a class="btn btn-success" href="{{route("compras.show", $compra)}}">
                                    <i class="fa fa-info"></i>
                                </a>
                            </td>
                            <td style="width: 20px">
                                <form action="{{route("compras.destroy", [$compra])}}" method="post">
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
