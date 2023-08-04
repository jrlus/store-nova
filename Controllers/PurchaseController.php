<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Provider;
use App\Models\Product;
use App\Models\PurchaseDetails;
use Carbon\Carbon;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\PDF as DomPDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf as DompdfDompdf;

class PurchaseController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $providers=Provider::get();
        $products=Product::get();
        $purchases=Purchase::orderBy('id')->paginate(5);
        return view('amd.purchase.index', compact('purchases','products','providers'));
    }

    public function create()
    {
        //
        $products=Product::get();
        $providers=Provider::get();
        return view('amd.purchase.create',compact('providers','products'));
    }


    public function store(StorePurchaseRequest $request, PurchaseDetails $purchaseDetails)
    {
        //
        $purchaseDetails = new PurchaseDetails();
if ($purchaseDetails) {
    //$product = $purchaseDetails->getProduct();
    //$product->updateStock();updateStock
}
        /*$purchaseDetails->product_id = $request->product_id;
        $purchaseDetails->quantity = $request->quantity;
        $purchaseDetails->updateStock();*/
        //dd($request);
        $purchase=Purchase::create($request->all()+[
            'purchase_date'=>Carbon::now('America/Caracas'),
            'user_id'=>Auth::user()->id,
            //'user_id'=>'2',
        ]);//dd($request);
        foreach($request->product_id as $key=>$product){
            $results[]=array('product_id'=>$request->product_id[$key],
            'quantity'=>$request->quantity[$key],'price'=>$request->price[$key]);
        };
        $purchase->purchaseDetails()->createMany($results);
        return redirect()->route('purchases.index');
    }

    public function show(Purchase $purchase)
    {
        //
        //dd($purchase);
        $subtotal=0;
        $purchaseDetails=$purchase->purchaseDetails;
        foreach($purchaseDetails as $purchaseDetail){
            $subtotal+=$purchaseDetail->quantity*$purchaseDetail->price;
        };

        return view('amd.purchase.show',compact('purchase','subtotal','purchaseDetails'));

    }

    public function edit(Purchase $purchase)
    {
        //
        $providers=Provider::get();
        return view('amd.purchase.edit',compact('purchase'));
    }

    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        //
        //$purchase->update($request->all());
        //return redirect()->route('purchase.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $Purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
        //$purchase->delete();
        //return redirect()->route('purchase.index');
    }

    public function pdf(Purchase $purchase)
    {



        //return  $pdf->download('Reporte_de_Compra-'.$purchase->id.'.pdf');
        //return $pdf->stream('Reporte_de_Compra.pdf');
        //$pdf = DomPDF::loadView('amd.pdf.pdf', $purchase);
    //$pdf->loadHTML('<h1>Test</h1>');



    }
    public function upload(Request $request, Purchase $purchase)
    {
        //
        //$purchase->update($request->all());
        //return redirect()->route('purchase.index');
    }
    public function change_status( Purchase $purchase)
    {
        if ($purchase->status=='VALID') {
            $purchase->update(['status'=>'CANCELED']);
            return redirect()->back();
        } else {
            $purchase->update(['status'=>'VALID']);
            return redirect()->back();
        }
    }
}
