<?php

namespace App\Http\Controllers;

use App\Models\SoppingCartDetail;
use App\Http\Requests\StoreSoppingCartDetailRequest;
use App\Http\Requests\UpdateSoppingCartDetailRequest;

class SoppingCartDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreSoppingCartDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSoppingCartDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SoppingCartDetail  $soppingCartDetail
     * @return \Illuminate\Http\Response
     */
    public function show(SoppingCartDetail $soppingCartDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SoppingCartDetail  $soppingCartDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(SoppingCartDetail $soppingCartDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSoppingCartDetailRequest  $request
     * @param  \App\Models\SoppingCartDetail  $soppingCartDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSoppingCartDetailRequest $request, SoppingCartDetail $soppingCartDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SoppingCartDetail  $soppingCartDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SoppingCartDetail $soppingCartDetail)
    {
        //
    }
}
