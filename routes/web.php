<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;


use Barryvdh\DomPdf\Facade\Pdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    //$pdf=App::make('dompdf.wrapper');
    //$pdf=app('dompdf.wrapper');
    //$pdf->loadHtml('<h1>Este es mi pdf helper</h1>');
  //  $pdf->loadView('pdfs.pdf');
    //$pdf=Pdf::loadHtml('<h1>Este es mi pdf helper PDF</h1>');
//    return $pdf->stream();
//});
Route::get('/', function () {
    return view('layouts.amd');
});
//Route::get('/saludo', function () {
   // return view('hola.saludo');
//});

//Route::resource('almacen/categoria','CategoriaController');
//Route::resource('almacen/categoria', CategoriaController::class);
Auth::routes();

Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('clients', ClientController::class)->names('clients');
Route::resource('products', ProductController::class)->names('products');
Route::resource('purchases', PurchaseController::class)->names('purchases');
Route::resource('providers', ProviderController::class)->names('providers');
Route::resource('sales', SaleController::class)->names('sales');

Route::get('purchases/pdf/{purchase}','PurchaseController@pdf')->name('purchases.pdf');

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
