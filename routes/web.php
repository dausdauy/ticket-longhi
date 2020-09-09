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

// Custom URL resource
Route::get('/knowledges/admin', ['as' => 'knowledges.index', 'uses' => 'KnowledgeController@index']);
Route::get('/knowledges/admin_category', ['as' => 'categories.index', 'uses' => 'CategoryController@index']);
Route::get('/knowledges/dashboard', ['as' => 'knowledges.dashboard', 'uses' => 'KnowledgeController@dashboard']);

// Route Resource
Route::resource('knowledges', 'KnowledgeController');
Route::resource('categories', 'CategoryController');

// Route::get('/knowledges/dashboard', function () {
// 	return View::make('layouts.knowledge.body');
// });

// Route Category




// Route::get('/', function () {
// 	if(Auth::guest()){
//     	return view('welcome');
// 	}else{
// 		return redirect('/home');
// 	}
// });


Auth::routes();

Route::get('/home', function(){
	return redirect(action('\Kordy\Ticketit\Controllers\TicketsController@index'));
});
