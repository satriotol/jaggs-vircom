<?php

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

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/','')

Auth::routes(['register'=>false]);
Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{lomba}', 'HomeController@detail')->name('detail');
Route::get('/tentang', 'HomeController@tentang')->name('tentang');
Route::get('/kontak', 'HomeController@kontak')->name('kontak');
Route::post('/kontak', 'HomeController@sendemail')->name('sendemail');
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/admin','AdminController@index')->name('admin.index');
        Route::resource('/admin/kategori', 'KategoriController');
        Route::resource('/admin/subkategori', 'SubKategoriController');
        Route::resource('/admin/jenjang', 'JenjangController');
        Route::resource('/admin/lomba','LombaController');
        Route::resource('/admin/company', 'CompanyController');
        Route::resource('/admin/team', 'TeamController');
    });
});
