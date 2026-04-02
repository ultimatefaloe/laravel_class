<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SecondTestController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'John Doe';
    $email = 'john.doe@example.com';
    return view('about', compact('name', 'email'));
});

Route::get('/contact', function () { 
    return view('contact');
});

Route::prefix('products')->group(function () {
    Route::get('/', function () {
        return view('product');
        //return view('products.index');
    })->name('products.index');

    Route::get('/{slug}', function ($slug) {
        return '<h1>Product</h1><p>This is the product page.</p>' . $slug;
        //return view('products.show', ['slug' => $slug]);
    })->name('products.show');

    Route::get('/{productName}/{price}', function ($productName, $price) {
        return view('product', compact('productName', 'price'));
    })->name('products.show');
});

Route::fallback(function () {
    return 'This page does not exist, try different url/page';
});

Route::prefix('/api')->group(function () {
    Route::controller((ProductController::class))->group(function () {
        Route::get('/products',  'index');
        Route::get('/products/{slug}',  'slug');
    });
    Route::get('/test', TestController::class);
    Route::resource('second-test', SecondTestController::class);
});

