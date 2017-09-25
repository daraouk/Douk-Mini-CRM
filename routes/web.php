<?php

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

/* Main Page */
Route::get('/', function () {
	$clients = DB::table('clients')->latest()->get();

    return view('pages.index', compact('clients'));
});

/* View Client */
Route::get('client/{id}', function ($id) {
	$client = DB::table('clients')->find($id);

    return view('pages.view', compact('client'));
});

/* About */
Route::get('about', function () {
    return view('pages.about');
});

/* Contact */
Route::get('contact', function () {
    return view('pages.contact');
});