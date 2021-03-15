<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

use Illuminate\Http\Request;


Route::get('/', function () {
    return view('main');

});

Route::get('export/{id}', 'UsersExportController@export')->name('export');


Route::get('secret', function(Request $request){
    return 'This is my secret message';
})->name('secret')->middleware('signed');