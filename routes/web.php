<?php

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/crud4', function () {
    return view('crud4/index');
});
Route::get('/blogy','blogcontroller@index');




Route::get('/blogy/create','blogcontroller@create');
Route::post('/blogy/store','blogcontroller@store');

Route::get('/blogy/{id}','blogcontroller@show');
Route::get('/blogy/{id}/edit','blogcontroller@edit');
Route::post('/blogy/update/{id}','blogcontroller@update'); 


Route::delete('/blogy/{id}','blogcontroller@destroy'); 

// route kedua
// Route::group(['prefix' => 'laravel-crud-image-gallery'], function () {
//     Route::get('/', 'Crud4Controller@index');
//     Route::match(['get', 'post'], 'create', 'Crud4Controller@create');
//     Route::match(['get', 'put'], 'update/{id}', 'Crud4Controller@update');
//     Route::delete('delete/{id}', 'Crud4Controller@delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
