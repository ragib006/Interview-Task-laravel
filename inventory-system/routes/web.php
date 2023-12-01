<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admincontroller;

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
  //  return view('welcome');
//});


Route::get('/all_product_page', [Admincontroller::class, 'allproductpage']);


Route::get('/add_product_page', [Admincontroller::class, 'addproductpage']);

Route::post('/add_product_form_action', [AdminController::class, 'addproductformaction']);

//view_product_page

Route::get('/view_product_page/{id}', [Admincontroller::class, 'viewproductpage']);

//edit_product_page


Route::get('/edit_product_page/{id}', [Admincontroller::class, 'editproductpage']);



Route::post('/product_edit_form_action/{id}', [Admincontroller::class, 'producteditformaction']);

//product_delete

Route::get('/product_delete/{id}', [Admincontroller::class, 'productdelete']);


//admin login

Route::get('/', [Admincontroller::class, 'userloginpage']);


Route::post('/user_login_from_action', [Admincontroller::class, 'userloginfromaction']);


Route::post('/user_registration_from_action', [Admincontroller::class, 'userregistrationfromaction']);

//userregistrationpage

Route::get('/user_registration', [Admincontroller::class, 'userregistrationpage']);