<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\products_controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
//--------------------------------------->START VIEWS <------------------------------
Route::get('/', function () {
    return view('vw_home');
});

Route::get('/login',[UserController::class,'ShowFormLogin'])->name('user.login');

Route::get('/cadastro',[UserController::class,'ShowRegisterForm'])->name('user.register');

// verifica login
Route::middleware(['verify_login'])->group(function (){
    Route::get('/produtos',[ProductController::class,'ShowProducts'])->name('products.show');
});

Route::get('/produto/{id_product}',[ProductController::class,'ShowProduct'])->name('product.show');



//!!!!!!!!!!!!!!!!!!dps add o verify adm!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
Route::middleware(['verify_login'])->group(function (){
    Route::get('/adm',[AdmController::class,'ShowAdmArea'])->name('adm.show');
    Route::get('/cadastro-produtos',[AdmController::class,'ShowRegisterProduct']);
    Route::post('/register-product',[AdmController::class,'register_product'])->name('adm.register');
});
//--------------------------------------->END VIEWS <------------------------------

//--------------------------------------->START ROUTES <---------------------------
Route::post('/login',[UserController::class,'action_login'])->name('action.login');
Route::post('/cadastro',[UserController::class,'Register'])->name('action.register');
//--------------------------------------->END ROUTES <-----------------------------