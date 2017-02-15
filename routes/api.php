<?php

use Illuminate\Http\Request;

Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store');
Route::get('/products/export', 'ExportController@exportProductToCSV');
