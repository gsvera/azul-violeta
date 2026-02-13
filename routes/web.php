<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\ContactMail;
use App\Http\Controllers\SendMailController;

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
Route::get('/tipos-de-bodas', function() {
    return view('wedding-type');
});
Route::get('/servicios', function() {
    return view('services');
});
Route::get('/galeria', function() {
    return view('gallery');
});
Route::get('/gracias', function(){
    return view('home');
});
Route::post('/gracias', [SendMailController::class, 'Send']);
Route::get('/politica-de-privacidad', function(){
    return view('privacy');
});
Route::get('/terminos-y-condiciones', function(){
    return view('terms-and-conditions');
});


Route::permanentRedirect('/blog', '/blog')->name('blog');


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
    Route::get('/wedding-type', function() {
        return view('wedding-type');
    });
    Route::get('/services', function() {
        return view('services');
    });
    Route::get('/gallery', function() {
        return view('gallery');
    });
    Route::get('/thanks', function(){
        return view('home');
    });
    Route::post('/thanks', [SendMailController::class, 'Send']);
    Route::get('/privacy-policy', function(){
        return view('privacy');
    });
    Route::get('/terms-and-conditions', function(){
        return view('terms-and-conditions');
    });
});