<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('purchase');
});

Route::get('/admin/product', function () {
    return view('admin.product.index');
})->name('admin.product.index');

Route::get('/admin/client', function () {
    return view('admin.client.index');
})->name('admin.client.index');

Route::get('/admin/facture', function () {
    return view('admin.facture.index');
})->name('admin.facture.index');
Route::get('/admin/product/add', function () {
    return view('admin.product.create');
})->name('admin.product.create');
