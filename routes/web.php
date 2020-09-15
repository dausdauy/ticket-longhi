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

Route::get('/', function () {
	return view('welcome');
});

Route::group(['middleware' => ['auth']], function (){
	// Custom URL for Admin use Auth, put should be first
	Route::get('/knowledges/admin', ['as' => 'knowledges.admin', 'uses' => 'KnowledgeController@admin']);
	Route::get('/knowledges/admin_category', ['as' => 'categories.index', 'uses' => 'CategoryController@index']);
});

Route::resource('knowledges', 'KnowledgeController');
Route::resource('categories', 'CategoryController');

Auth::routes();
Route::get('/home', function(){
	return redirect(action('\Kordy\Ticketit\Controllers\TicketsController@index'));
});
