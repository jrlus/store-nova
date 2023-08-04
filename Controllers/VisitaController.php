<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Visita;
use App\Http\Requests\Visitas\StoreRequest;

use Carbon\Carbon;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients=Client::get();
        $visitas=Visita::paginate(5);
        return view('amd.visita.index', compact('visitas','clients'))
        ->with('1',(request()->input('page',1)-1)*$visitas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clients=Client::get();
        $visitas= Visita::get();
        return view('amd.visita.create',compact('visitas','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
        //dd($request);
        //$clients=$request->get('client_id');

        $visitas=Visita::create($request->all()+[
            'visita_date'=>Carbon::now('America/Caracas'),
            //'client_id'=>$request->get('client_id'),

        ]); $visitas->save();

        return redirect()->route('visitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visita  $Visita
     * @return \Illuminate\Http\Response
     */
    public function show(Visita $visita)
    {
        //
        $clients=Client::get();
        return view('amd.visita.show',compact('visita','clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visita  $Visita
     * @return \Illuminate\Http\Response
     */
    public function edit(Visita $visita)
    {
        //
        $clients=Client::get();
        return view('amd.visita.edit',compact('visita','clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Visita  $Visita
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Visita $visita)
    {
        //
        $visita->update($request->all());
        return redirect()->route('visitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visita  $Visita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visita $visita)
    {
        //
        $visita->delete();
        return redirect()->route('visitas.index');
    }
}
