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


Route::resource('product', 'ProductController');

Route::get('/', "SiteController@viewHome")->name('home');
Route::post('/logout', "SiteController@viewHome");
Route::get('/comoComprar', "SiteController@viewComoComprar");
Route::get('/faleConosco', "SiteController@viewFaleConosco");
Route::get('/sobreNos', "SiteController@viewSobreNos");
Route::get('/adm', "SiteController@viewAdm");

Route::post('/criarFeedback', "FeedbackController@armazenaFeedback");

Route::post('/register',"Auth\RegisterController@create");

Route::get('/login',"Auth\LoginController@viewLogin");

Route::get('/feedback/deletar/{id?}',"FeedbackController@deletaFeedback");

Auth::routes();

