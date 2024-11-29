<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('orders', function () {
    return view('order.index');
})->name('orders');


Route::get('clients', function () {
    return view('clients.index');
})->name('clients');

Route::get('add-client', function () {
    return view('clients.create');
})->name('drivers.client');


Route::get('drivers', function () {
    return view('drivers.index');
})->name('drivers');

Route::get('add-driver', function () {
    return view('drivers.create');
})->name('drivers.create');

