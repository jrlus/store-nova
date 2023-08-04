<?php

namespace App\Http\Controllers;

use App\Models\PurchaseDetails;
use App\Http\Requests\StorePurchaseDetailsRequest;
use App\Http\Requests\UpdatePurchaseDetailsRequest;
use App\Models\Purchase;
use Barryvdh\DomPDF\Facade\Pdf;

class PurchaseDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePurchaseDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePurchaseDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PurchaseDetails  $purchaseDetails
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseDetails $purchaseDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchaseDetails  $purchaseDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseDetails $purchaseDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePurchaseDetailsRequest  $request
     * @param  \App\Models\PurchaseDetails  $purchaseDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurchaseDetailsRequest $request, PurchaseDetails $purchaseDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchaseDetails  $purchaseDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseDetails $purchaseDetails)
    {
        //
    }
    public function pdf(Purchase $purchase)
    {
        //
        $subtotal=0;
        $purchaseDetails=$purchase->purchaseDetails;
        foreach($purchaseDetails as $purchaseDetail){
            $subtotal+=$purchaseDetail->quantity*$purchaseDetail->price;
        };

        $pdf = Pdf::loadView('amd.purchase.pdf',$purchase);
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->download('Reporte_de_Compra.pdf');

        //$pdf=DomPDF::loadView('purchase.pdf',compact('purchase','subtotal','purchaseDetails'));
        //return  $pdf->download('Reporte_de_Compra-'.$purchase->id.'.pdf');
        //return $pdf->stream('Reporte_de_Compra.pdf');
    }
}
