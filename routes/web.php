<?php

use Illuminate\Support\Facades\Route;

use App\Models\Davetiye;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('welcome');


});

Route::get('/iletişim', function () {

    return "gelecek iletişim";


});

Route::get('/hakkımızda', function () {

    return "gelecek Hakkımızda";

});


Route::get('/davetiye/{id}','App\Http\Controllers\DavetiyeController@index');

Route::get('/davetiyelistele/{id}','App\Http\Controllers\DavetiyeController@davetiyelistele');

Route::get('/davetiyeekle', function () {

   $davetiye = new Davetiye;
   
   $davetiye->kodu ="e6125";
   $davetiye->adi ="Charisma Davetiye";
   $davetiye->ureticikodu ="3438";
   $davetiye->ureticiadi ="Koza";
   $davetiye->fiyati =530;
   $davetiye->ureticifiyati =468;
   $davetiye->indirimlifiyati =500;
   $davetiye->save();

});