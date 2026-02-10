<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $locale = 'es';

    Session::put('locale', $locale);
    App::setLocale($locale);

    return view('home');
});
Route::get('/venues', function() {
    return view('venues');
});
Route::get('/grupos-y-convenciones', function() {
    return view('groups-and-conventions');
});

Route::group(['prefix' => 'en'], function() {
    Route::get('/', function() {
         $locale = 'en';

        Session::put('locale', $locale);
        App::setLocale($locale);
            return view('home');
    });
    Route::get('/venues', function() {
        return view('venues');
    });
    Route::get('/group-and-conventions', function() {
        return view('groups-and-conventions');
    });
});
