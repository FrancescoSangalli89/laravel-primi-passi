<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    $logo = 'laravel world!';
    $links = ['about us', 'contacts', 'search'];

    return view('home', [
        'logo' => $logo,
        'links' => $links
    ]);
})->name('homepage');

Route::get('/aboutUs', function() {
    $titolo1 = 'About us';

    return view('aboutUs', [
        'titolo1' => $titolo1
    ]);
})->name('aboutUs');

Route::get('/contacts', function() {
    $titolo2 = 'Contacts';

    return view('home', [
        'titolo2' => $titolo2
    ]);
})->name('contacts');

Route::get('/search', function() {
    $titolo3 = 'search';

    return view('search', [
        'titolo3' => $titolo3
    ]);
})->name('search');
