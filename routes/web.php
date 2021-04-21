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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/abouts1', 'Abouts1Controller@aboutusindex')->name('abouts1');

// Route::get('/',function(){
// 	return view('blog.home1');
// });
Route::get('/',function(){
	return view('blog.home1');
});
Route::get('/abouts1',function(){
	return view('blog.abouts1');
});
Route::get('/service1',function(){
	return view('blog.service1');
});
Route::get('/gallery1',function(){
	return view('blog.gallery1');
});
Route::get('/contact1',function(){
	return view('blog.contact1');
});

Route::group(['middleware'=>['auth','admin']],function(){

Route::get('/dashboard','Admin\DashboardController@xodimlar');
Route::post('/save-person','Admin\DashboardController@personSave');
Route::get('/person-us/{id}','Admin\DashboardController@editPerson');
Route::put('/xodimlar-update/{id}','Admin\DashboardController@updatePerson');
Route::delete('/xodimlar-delete/{id}','Admin\DashboardController@deletePerson');
// Route::get('/products', function () {
//     return view('admin.products');
// });
Route::get('/role-register','Admin\DashboardController@registered');
Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');

Route::get('/role-register-update/{id}','Admin\DashboardController@registerupdate');

Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

Route::get('/abouts','Admin\AboutsController@index');
Route::post('/save-abouts','Admin\AboutsController@store');
Route::get('/about-us/{id}','Admin\AboutsController@edit');
Route::put('/abouts-update/{id}','Admin\AboutsController@update');
Route::delete('/about-us-delete/{id}','Admin\AboutsController@delete');


Route::get('/products','Admin\ProductsController@product');
Route::post('/save-products','Admin\ProductsController@productsSave');


Route::get('/sales','Admin\ProductsController@sales');
Route::post('/save-sales','Admin\ProductsController@salesSave');
Route::get('/sales-edit/{id}','Admin\ProductsController@editSales');
Route::get('/sales-update/{id}','Admin\ProductsController@updateSales');
Route::delete('/sales-delete/{id}','Admin\ProductsController@deleteSales');
Route::put('/sales-update/{id_mahsulot}','Admin\ProductsController@oldisotti');

});
