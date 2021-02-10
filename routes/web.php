<?php

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


/*FRONT */
Route::get('/', 'App\Http\Controllers\frontend\IndexController@index');
Route::get('/information_description/{id}', 'App\Http\Controllers\frontend\IndexController@information_description');
Route::get('/about', 'App\Http\Controllers\frontend\IndexController@about');
Route::get('/onlyonecategory/{id}', 'App\Http\Controllers\frontend\IndexController@onlyonecategory');
Route::get('/athorwords', 'App\Http\Controllers\frontend\IndexController@athorwords');

/*FRONT */


Route::get('/admin/login', 'App\Http\Controllers\backend\BackendController@login')->name('/admin/login');

/*BACK */  /**/
Auth::routes(["register" => false]);
Route::group(['middleware' => ['auth', 'web']], function () {
Route::get('/backendpage', 'App\Http\Controllers\backend\BackendController@index')->name('backendpage');
Route::get('/backendpage/allcategories', 'App\Http\Controllers\backend\BackendController@allcategories');
Route::get('/backendpage/allcategories/category_edit/{id}','App\Http\Controllers\backend\CategoryController@category_edit');
Route::post('/backendpage/allcategories/category/edited','App\Http\Controllers\backend\CategoryController@category_edited');
Route::get('/backendpage/backendmainpagesettings', 'App\Http\Controllers\backend\BackendController@backendmainpagesettings');
Route::post('/backendpage/backendmainpagesettings/logo/edit','App\Http\Controllers\backend\MainPageController@main_page_logo_edited');
Route::post('/backendpage/backendmainpagesettings/photo/edit','App\Http\Controllers\backend\MainPageController@main_page_photo_edited');
Route::get('/backendpage/backendinformation', 'App\Http\Controllers\backend\BackendController@backendinformation');
Route::get('/backendinformation/delete/{id}', 'App\Http\Controllers\backend\InformationController@delete');
Route::get('/backendinformation/edit/{id}', 'App\Http\Controllers\backend\BackendController@edit_page');
Route::get('/backendinformation/add_page', 'App\Http\Controllers\backend\BackendController@add_page');
Route::post('/backend/backendinformation/save','App\Http\Controllers\backend\InformationController@save');
Route::post('/backend/backendinformation/edited/{id}','App\Http\Controllers\backend\InformationController@edited');
Route::get('/backendinformation/active/{id}','App\Http\Controllers\backend\InformationController@active');
Route::get('/backendpage/about','App\Http\Controllers\backend\BackendController@about');
Route::post('/backend/backendabout/update','App\Http\Controllers\backend\AboutController@update');
Route::get('/backendpage/backendathorwords','App\Http\Controllers\backend\BackendController@backendathorwords');
Route::get('/backendpage/athorwords/athorwords_add_page', 'App\Http\Controllers\backend\BackendController@athorwords_add_page');
Route::post('/backend/backendathorwords/save','App\Http\Controllers\backend\AthorWordsController@save');
Route::get('/backendathorword/edit/{id}', 'App\Http\Controllers\backend\BackendController@edit_page_athorwords');
Route::post('backend/backendathorword/edited/{id}','App\Http\Controllers\backend\AthorWordsController@edited');
Route::get('/backendathorword/delete/{id}', 'App\Http\Controllers\backend\AthorWordsController@delete');
});

/*BACK */



