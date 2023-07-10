<?php

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\TokoController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource("kriteria","KriteriaController")->except(['create']);
Route::resource("alternatif","AlternatifController")->except(['create','show']);
Route::resource("crips","CripsController")->except(['index','create','show']);
// Route::get('/penilaian','PenilaianController@index')->name('penilaian.index');
Route::resource('/penilaian','PenilaianController');
Route::get('/perhitungan', 'AlgoritmaController@index')->name('perhitungan.index');
// Route::resource('/halaman-list-user','HalamanListUserController')->except(['create']);
Route::get('/halaman-admin', 'HalamanAdminController@index');
// Route::get('/halaman-admin-add', 'HalamanAdminController@add');
Route::resource("/","WelcomeController");
