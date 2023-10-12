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
    $data = [
        'comics' => config('db_comics.comics'),
        'footer_images' => config('db_footer.images'),
        'footer_links' => config('db_footer.links'),
        'footer_shops' => config('db_footer.shops'),
        'footer_help_options' => config('db_footer.help_options'),
        'footer_sites' => config('db_footer.sites'),
        'footer_icons' => config('db_footer.icons')
    ];
    return view('home', compact('data'));
})->name('home');

Route::get('/news', function () {
    $data = [
        'comics' => config('db_comics.comics'),
        'footer_images' => config('db_footer.images'),
        'footer_links' => config('db_footer.links'),
        'footer_shops' => config('db_footer.shops'),
        'footer_help_options' => config('db_footer.help_options'),
        'footer_sites' => config('db_footer.sites'),
        'footer_icons' => config('db_footer.icons')
    ];
    return view('news', compact('data'));
})->name('news');