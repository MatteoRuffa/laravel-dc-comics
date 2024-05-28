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
    $dccomics = config('db_comics.dccomics');
    $comics = config('db_comics.infocomics');
    $navbarFooter = config('db_comics.navbarFooter');
    $navigation = config('db_comics.navigation');
    return view('home', compact('dccomics', 'comics', 'navbarFooter', 'navigation'));
})->name('home');
Route::get('/about', function () {
    $dccomics = config('db_comics.dccomics');
    $comics = config('db_comics.infocomics');
    $navbarFooter = config('db_comics.navbarFooter');
    $navigation = config('db_comics.navigation');
    return view('About', compact('dccomics', 'comics', 'navbarFooter', 'navigation'));
})->name('about');
