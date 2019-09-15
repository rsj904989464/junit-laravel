<?php
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('rr.store');


Route::get('test', 'TestController@index');
