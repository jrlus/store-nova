<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Provider;
use App\Models\Product;
use App\Models\PurchaseDetails;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\PDF as DomPDFPDF;

class PurchaseController extends Controller
{

    public function index()
    {
        //
        $purchases=Purchase::get();
        return view('amd.purchase.index', compact('purchases'));
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
    $product = $purchaseDetails->getProduct();
    $product->updateStock();
}


        /*$purchaseDetails->product_id = $request->product_id;
        $purchaseDetails->quantity = $request->quantity;
        $purchaseDetails->updateStock();*/


        $purchase=Purchase::create($request->all()+[
            'purchase_date'=>Carbon::now('America/Caracas'),
            //'user_id'=>Auth::user()->id,
            'user_id'=>'1'
        ]);
        foreach($request->product_id as $key=>$sus){
            $results[]=array('product_id'=>$request->product_id[$key],
            'quantity'=>$request->quantity[$key],'price'=>$request->price[$key]);
        };


        $purchase->purchaseDetails()->createMany($results);
        return redirect()->route('purchases.index');
    }

    public function show(Purchase $purchase)
    {
        //

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
        dd($purchase);
        //
        $subtotal=0;
        $purchaseDetails=$purchase->purchaseDetails;
        foreach($purchaseDetails as $purchaseDetail){
            $subtotal+=$purchaseDetail->quantity*$purchaseDetail->price;
        };

        $pdf=PDF::loadView('purchase.pdf',compact('purchase','subtotal','purchaseDetails'));
        return  $pdf->download('Reporte_de_Compra-'.$purchase->id.'.pdf');


    }

}
