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
Route::get('/infolomba', 'HomeController@infolomba')->name('infolomba');
Route::get('/kategori/{category}', 'HomeController@kategori')->name('kategori');
Route::get('/detail/{lomba}', 'HomeController@detail')->name('detail');
Route::get('/tentang', 'HomeController@tentang')->name('tentang');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/kontak', 'HomeController@kontak')->name('kontak');
Route::post('/kontak', 'HomeController@sendemail')->name('sendemail');
Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/admin','AdminController@index')->name('admin.index');
        Route::resource('/admin/kategori', 'KategoriController');
        Route::resource('/admin/subkategori', 'SubKategoriController');
        Route::resource('/admin/jenjang', 'JenjangController');
        Route::resource('/admin/lomba','LombaController');
        Route::resource('/admin/team', 'TeamController');
        Route::get('/admin/company/menu/{company}', 'CompanyController@editmenu')->name('company.menu');
        Route::put('/admin/company/menu/{company}', 'CompanyController@updatemenu')->name('company.updatemenu');
        Route::get('/admin/company/beranda/{company}', 'CompanyController@editberanda')->name('company.beranda');
        Route::put('/admin/company/beranda/{company}', 'CompanyController@updateberanda')->name('company.updateberanda');
        Route::get('/admin/company/tentang/{company}', 'CompanyController@edittentang')->name('company.tentang');
        Route::put('/admin/company/tentang/{company}', 'CompanyController@updatetentang')->name('company.updatetentang');
        Route::get('/admin/company/sosialmedia/{company}', 'CompanyController@editsosialmedia')->name('company.sosialmedia');
        Route::put('/admin/company/sosialmedia/{company}', 'CompanyController@updatesosialmedia')->name('company.updatesosialmedia');
    });
});
