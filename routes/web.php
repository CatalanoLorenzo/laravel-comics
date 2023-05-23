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

Route::get('/Comics', function () {
    $voices= config('voice_navbar.voices');
    $about_nav = config('about_nav_menu.about_nav');
    $footericon = config('footer_icon.foote_icon');
    $comics = config('comics.comics');
    $shops = config('shop_menu.shop_menu');
    return view('Comics',compact('voices','about_nav','footericon','comics','shops'));
})->name('Comics');
