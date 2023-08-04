<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseDetailsController;
use App\Http\Controllers\SaleController;
use  App\Http\Controllers\BusinessController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('layouts.amd');
});
Auth::routes();

Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('clients', ClientController::class)->names('clients');
Route::resource('products', ProductController::class)->names('products');
Route::resource('purchases', PurchaseController::class)->names('purchases');
Route::resource('providers', ProviderController::class)->names('providers');
Route::resource('sales', SaleController::class)->names('sales')->except(['update']);
Route::resource('visitas', VisitaController::class)->names('visitas');

Route::resource('business', BusinessController::class)->names('business')->only('index','update');
Route::get('purchases/pdf/{purchase}',[PurchaseController::class,'pdf'])->name('purchases.pdf');
Route::get('sales/pdf/{sale}',[SaleController::class,'pdf'])->name('sales.pdf');
Route::get('categories/pdf/{category}','CategoryController@pdf')->name('categories.pdf');

Route::get('purchases/upload/{purchase}',[PurchaseController::class,'upload'])->name('upload.purchases');
Route::get('products/pdf','ProductController@pdf')->name('products.pdf');

Route::get('change_status/products/{product}','ProductController@change_status');
Route::get('change_status/purchases/{purchase}', 'PurchaseController@change_status');
Route::get('change_status/sales/{sale}','SaleController@change_status');

Route::get('sales/reports_day','ReportController@reports_day')->name('reports.day');
Route::get('sales/reports_date','ReportController@reports_date')->name('reports.date');

Route::post('sales/report_results','ReportController@report_results')->name('report.results');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


