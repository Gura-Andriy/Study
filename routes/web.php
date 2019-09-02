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

use App\Http\Controllers\IndexController;

Route::get('/', 'IndexController@main');
Route::get('/index', 'IndexController@index')->name('index');
Route::get('/apartment', 'IndexController@apartment')->name('apartment');
Route::get('/registration', 'IndexController@registration')->name('registration');
Route::get('/apartment/add-offer', 'IndexController@AddOffer')->name('add-offer')->middleware('auth');
Route::post('/apartment/add-offer', 'IndexController@SubmitAddOffer')->name('submit-add-offer')->middleware('auth');
Route::get('/apartment/add-article', 'IndexController@addArticle')->name('add-article')->middleware('auth');
Route::post('/apartment/add-article', 'IndexController@submitAddArticle')->name('submit-add-article')->middleware('checkUser');
Route::get('/apartment/edit/{id_offer}', 'IndexController@editOffer')->name('edit-offer')->middleware('checkUser');
Route::post('/apartment/edit/{id_offer}', 'IndexController@submitEditOffer')->name('submit-edit-offer')->middleware('checkUser');
Route::get('/apartment/delete/{id_offer}', 'IndexController@deleteOffer')->name('delete-offer')->middleware('checkUser');
Route::get('/apartment/view/{id_offer}', 'IndexController@showOffer')->name('view-offer');

Auth::routes();

