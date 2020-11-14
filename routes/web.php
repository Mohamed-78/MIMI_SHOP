<?php

use Illuminate\Support\Facades\Route;


Route::name('accueil')->get('/','PagesController@accueil');
Route::name('boutique')->get('/boutique','LinksController@boutique');
Route::name('contact')->get('/contact','ContactController@contact');
Route::name('message')->get('/message','MsgController@message');
Route::name('echanges')->get('/echanges','LinksController@echanges');
Route::name('changecmde')->get('/cmde','LinksController@cmde');
Route::name('rec')->get('/rec','LinksController@rec');
Route::name('commande')->get('/commande','CommandeController@commande');
Route::name('search')->get('/search','LinksController@search');
Route::name('actuality')->get('/actuality','ActualiteController@actuality');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');


Route::resource('Home','HomeController');
Route::resource('Contact','ContactController');
Route::resource('Msg','MsgController');
Route::resource('Change','EchangeController');
Route::resource('Pages','PagesController');
Route::resource('Nouveau','ActualiteController');
Route::resource('Shopping','CartController');
Route::resource('Download','CommandeController');
