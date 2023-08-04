<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Provider;
use FontLib\Table\Type\name;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\CartCollection;
use Darryldecode\Cart\Facades\CartFacade;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=Category::get();
        $providers=Provider::get();
        if($categories){

        $products=Product::orderBy('id')->paginate(5);
        return view('amd.product.index', compact('products','categories','providers'));
        }else{
            $products=Product::orderBy('id')->paginate(4);
            return view('amd.product.index', compact('products','categories','providers'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::get();
        $providers=Provider::get();
        return view('amd.product.create', compact('categories','providers'))->with("mensaje","Debe primero adicionar una categoria");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
        //
        //dd($request);
        if($request->hasFile('picture')){
            $file=$request->file('picture');
            $image_name=time().'_'.$file->getClientOriginalName();
            $file->move(public_path('/image'),$image_name);
        }
        $product=Product::create($request->all()+[
            'image'=>$image_name,
        ]);
        $product->update(['code'=>$product->id]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('amd.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //

        $categories=Category::get();
        $providers=Provider::get();
        return view('amd.product.edit',compact('product','categories','providers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        //

        if($request->hasFile('picture')){
            $file=$request->file('picture');
            $image_name=time().'_'.$file->getClientOriginalName();
            $file->move(public_path('/image'),$image_name);
        }
        $product->update($request->all()+[
            'image'=>$image_name,
        ]);
        $product->update(['code'=>$product->id]);


        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->route('products.index');
    }
    public function change_status( Product $product)
    {
        //
        if ($product->status=='ACTIVE') {
            $product->update(['status'=>'DESACTIVED']);
            return redirect()->back();
        } else {
            $product->update(['status'=>'ACTIVE']);
            return redirect()->back();
        }


        //$purchase->update($request->all());
        //return redirect()->route('purchase.index');
    }
    public function pdf(){
     return view('amd.product.tuto1');
    }
/********************************************************************
    public  function  shop()
    {
        $products  =  Product::all();

        return  view('shop')->withTitle('E-COMMERCE  STORE  |  SHOP')->with(['products'  => $products]);
    }
    public  function  cart()    {
        $cartCollection  =  \Cart::getContent();
        //dd($cartCollection);
        return  view('cart')->withTitle('E-COMMERCE  STORE  |  CART')->with(['cartCollection'  => $cartCollection]);;
    }

    public  function  remove(Request  $request){
        \Cart::remove($request->id);
        return  redirect()->route('cart.index')->with('success_msg',  'Item  is  removed!');
    }

    public  function  add(Request $request){
        \Cart::add(array(
        'id'  =>  $request->id,
        'name'  =>  $request->name,
        'price'  =>  $request->price,
        'quantity'  =>  $request->quantity,
        'attributes'  =>  array(
        'image'  =>  $request->img,
        'slug'  =>  $request->slug
        )
    ));
        return  redirect()->route('cart.index')->with('success_msg',  'Item  Agregado  a  sú  Carrito!'); }

        public  function  update2(Request  $request){
            \Cart::update($request->id,
            array(
            'quantity'  =>  array(
            'relative'  =>  false,
            'value'  =>  $request->quantity
            ),
            ));
        return  redirect()->route('cart.index')->with('success_msg',  'Cart  is  Updated!'); }

        public  function  clear(){
            \Cart::clear();
            return  redirect()->route('cart.index')->with('success_msg',  'Car  is  cleared!'); }*/
}


