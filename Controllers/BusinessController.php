<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Business\UpdateRequest;
use App\Models\Business;

class BusinessController extends Controller
{
    //
    public function index(){
        $business= Business::where('id',1)->firtsOrfail();
        return view('adm.business.index', compact('business'));
    }
    public function update(UpdateRequest $request, Business $business){
        $business->update($request->all());
        return redirect()->route('business.index');
    }
}
