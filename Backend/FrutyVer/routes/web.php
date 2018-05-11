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

Route::get('products', function () {
    return view('provider/providerProductsPage');
});

Route::get('orders', function () {
    return view('provider/providerOrdersPage');
});

Route::get('stats', function () {
    return view('provider/providerStatsPage');
});