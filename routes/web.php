<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'admin','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/','indexController@index')->name('index');
    Route::group(['namespace'=>'urunler','prefix'=>'urunler','as'=>'urunler.'],function(){
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/ekle','indexController@store')->name('create.post');
        Route::get('duzenle/{id}', 'indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('edit.post');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
        
    });
    Route::group(['namespace'=>'urunler','prefix'=>'urunler','as'=>'urunler.'],function(){
        Route::get('/','indexController@index')->name('index');
        Route::get('/ekle','indexController@create')->name('create');
        Route::post('/ekle','indexController@store')->name('create.post');
        Route::get('duzenle/{id}', 'indexController@edit')->name('edit');
        Route::post('/duzenle/{id}','indexController@update')->name('edit.post');
        Route::get('/sil/{id}','indexController@delete')->name('delete');
        
    });
});


