<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\Facture_Controller;
use App\Models\Facture;
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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('contacts', ContactsController::class);

Route::resource('entreprises', EntrepriseController::class);

Route::resource('factures', Facture_Controller::class);
