<?php

use App\Subcategory;

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
Auth::routes();
//Route::get('/', function () {
// return view('index');
//});
//Route::get('/home', function () {
// return view('index');
//});
Route::get('/', 'Indexcotroller@index');
Route::get('/home', 'AdminController@index')->name('admin');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/visitorslist', 'AdminController@visitorslist');
Route::get('/product', 'ProductManagementController@index')->name('product');
Route::get('/about', 'ProductManagementController@about');
Route::post('/upload', 'UploadController@index');
Route::get('/upload', 'UploadController@index');
Route::get('/viewsliderimage', 'UploadController@viewsliderimage');

Route::get('/update/{id}', 'UploadController@update');
Route::get('/delete/{id}', 'UploadController@deleted');
Route::post('/edited/{id}', 'UploadController@edit');


Route::get('/category', 'CategoryController@index');
Route::post('/createcategory', 'CategoryController@create');


Route::get('/subcategory', 'SubcategoryController@index');
Route::post('/createsubcategory', 'SubcategoryController@createsubcategory');

Route::get('/subcat', 'SubcatController@index');
Route::post('/createsubcategory', 'SubcategoryController@createsubcategory');


Route::get('/product', 'ProductController@index');
Route::post('/createsproduct', 'ProductController@createsproduct');
Route::get('/getSubCatByCate/{id}', 'ProductController@anySubcategoryByCategory');

Route::get('/user_register', 'UserregisterController@index');
Route::POST('/submit_register', 'UserregisterController@submit_register');

Route::get('/contact', 'ContactController@index');
Route::POST('/establishcontact', 'ContactController@establishcontact');


