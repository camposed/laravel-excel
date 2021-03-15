<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

use Illuminate\Http\Request;


Route::get('/', function () {
    return view('main');

});

// Usando query con filtro where
Route::get('export/{id}', 'UsersExportController@export')->name('export');

//Usando la tabla
Route::get('export-table', 'ProductsExportController@export')->name('export-table');

// Importar
Route::get('importxls', 'ProductsExportController@importExportView');
Route::put('import', 'ProductsExportController@import')->name('import');

//URL firmadas
Route::get('secret', function(Request $request){
    return 'This is my secret message';
})->name('secret')->middleware('signed');