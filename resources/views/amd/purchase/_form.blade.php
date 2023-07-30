<div class="form-group">
    <label for="provider_id" class="form-label">Proveedor</label>
    <select class="form-control" name="provider_id" id="provider_id">
        <option value="">Seleccionar</option>
        @foreach ($providers as $provider )
        <option value="{{ $provider->id }}">{{ $provider->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
  <label for="tax" class="form-label">Impuesto</label>
  <input type="number" name="tax" id="tax" class="form-control" placeholder="%" required aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="product_id" class="form-label">Producto</label>
    <select class="form-control" name="product_id" id="product_id">
        <option value="">Seleccionar</option>
        @foreach ($products as $product )
        <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="price" class="form-label">Precio de compra</label>
    <input type="number" name="price" id="price" class="form-control" placeholder="Bs/$" required aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="quantity" class="form-label">Cantidad</label>
    <input type="number" name="quantity" id="quantity" class="form-control" placeholder="" required aria-describedby="helpId">
</div>

<div class="form-group">
    <button type="button" id="agregar" class="btn btn-primary float-right">Agregar Producto</button>
</div>

<div class="form-group">
    <h4>Detalles de Compra</h4>
    <div class="table-responsive col-md-12">
        <table id="detalles" class="table table-striped">
            <thead>
                <tr>
                    <th>Eliminar</th>
                    <th>Producto</th>
                    <th>Precio(Bs)</th>
                    <th>Cantidad</th>
                    <th>SubTotal(Bs)</th>
                </tr>
            </thead>
            <tfoot>

                <tr id="">
                    <th>

                        <p>Total:</p>
                    </th>
                    <th>
                        <p><span align="right" id="total">(Bs) 0.00</span></p>
                    </th>
                </tr>
                <tr id="dvocultar">
                    <th>
                        <p>TOTAL IMPUESTO (%)</p>
                    </th>
                    <th>
                        <p><span align="right" id="total_impuesto">(Bs) 0.00</span></p>
                    </th>
                </tr>
                <tr id="">
                    <th>
                        <p>TOTAL A PAGAR</p>
                    </th>
                    <th>
                        <p><span align="right" id="total_pagar_html">(Bs) 0.00</span>
                        <input type="hidden" id="total_pagar" name="total"></p>
                    </th>
                </tr>
            </tfoot>
            <tbody>

            </tbody>
        </table>
</div>








           <!--
            swal ( "Oops" ,  "Something went wrong!" ,  "error" )
NORMAL ALERT
alert ( "Oops, something went wrong!" )
swal({
  icon: "success",
});



        -->
