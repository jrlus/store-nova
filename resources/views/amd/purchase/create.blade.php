@extends('layouts.amd')
@section('title'.'Registro de Compras')
@section('styles')
@endsection

@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Registro de Compras</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel Administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Compras</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de Compras</li>
          </ol>
        </nav>
    </div>
    <div class="row">
        <div class=" col-lg-12 grid-margin stretch-card">
            <div class="card">
                {!! Form::open(['route'=>'purchases.store', 'method'=>'post']) !!}
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Compras</h4>
                    </div>
                </div>

                @include('amd.purchase._form')


            </div>
            <div class="card-footer text-muted">
                <button type="submit" id="guardar" class="btn btn-primary float-right" style="font-size: 1rem;">Registrar</button>
                <a href="{{ route('purchases.index') }}" class="btn btn-danger">Cancelar</a>

            </div>
            {!! Form::close() !!}
        </div>

    </div>

</div>
@endsection
@section('scripts')

<script>
$(document).ready(function(){
    $('#agregar').click(function(){
        agregar();
    });
});

var cont=0;
total=0;
subTotal=[];

$("#guardar").hide();
function agregar(){

    product_id=$("#product_id").val();
    producto=$("#product_id option:selected").text();
    quantity=$("#quantity").val();
    price=$("#price").val();
    impuesto=$("#tax").val();

    if(product_id !="" && quantity != "" && quantity>0 && price !=""){
        subTotal[cont]=quantity*price;
        total=total+subTotal[cont];
        var fila='<tr class="selected" id="fila'+ cont + '"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+ cont +');"><i class="fa fa-times"></i></button></td><td><input type="hidden" name="product_id[]" value="'+ product_id + '">'+ producto +'</td><td><input type="hidden" id="price[]" name="price[]" value="'+ price + '"><input class="form-control" type="number" id="price[]" value="'+ price +'" disabled></td><td><input type="hidden" name="quantity[]" value="'+ quantity +'"><input class="form-control" type="number" value="'+ quantity +'" disabled></td><td align="right">'+ subTotal[cont] + '</td></tr>';

            cont++;
            limpiar();
            totales();
            evaluar();
            $('#detalles').append(fila);
            }else{
                Swal.fire({
                    type: 'error',
                    tetxt: 'Rellene todos los campos del formulario detalles de compra'
                })
            }
    }
    function limpiar(){
        $("#quantity").val("");
        $("#price").val("");
    }

    function totales(){
        $("#total").html("PEN "+ total.toFixed(2));
        total_impuesto=total*impuesto/100;
        total_pagar=total+total_impuesto;
        $("#total_impuesto").html("PEN "+ total_impuesto.toFixed(2));
        $("#total_pagar_html").html("PEN "+ total_pagar.toFixed(2))
        $("#total_pagar").val(total_pagar.toFixed(2));
    }

    function evaluar(){
        if(total>0){
            $("#guardar").show();
        }else{
            $("#guardar").hide();
        }
    }
    function eliminar(index){
        total=total-subTotal[index];
        total_impuesto=total*impuesto/100;
        total_pagar_html=total+total_impuesto;
        $("#total").html("PEN "+total);
        $("#total_impuesto").html("PEN "+total_impuesto);
        $("#total_pagar_html").html("PEN "+total_pagar_html);
        $("#total_pagar").val(total_pagar);
        $("#fila"+index).remove();
        evaluar();

    }
</script>
@endsection
