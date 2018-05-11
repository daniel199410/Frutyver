<?php

Route::get('products', function () {
    return view('provider/providerProductsPage');
});

Route::get('orders', function () {
    return view('provider/providerOrdersPage');
});

Route::get('stats', function () {
    return view('provider/providerStatsPage');
});

Route::get('car', function () {
    return view('client/ShoppingCar');
});

Route::get('providersList', 'providerController@index');

Route::get('productList', function () {
    return view('client/productList');
});

Route::get('clientOrders', function () {
    return view('client/orders');
});