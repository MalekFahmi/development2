<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\categorycontroller;
use App\Http\Controllers\Admin\classificationcontroller;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {

Route::resource('classifications',classificationcontroller::class)->names(
    ['index'=>'classifications.index',
    'show'=>'classifications.show',
    'create'=>'classifications.create',
    'update'=>'classifications.update',
    'edit'=>'classifications.edit',
    'store'=>'classifications.store',
    'destroy'=>'classifications.destroy',
]);

Route::resource('categories',categorycontroller::class)->names(
    ['index'=>'categories.index',
    'show'=>'categories.show',
    'create'=>'categories.create',
    'update'=>'categories.update',
    'edit'=>'categories.edit',
    'store'=>'categories.store',
    'destroy'=>'categories.destroy',
]);

Route::resource('types',TypeController::class)->names(
    ['index'=>'types.index',
    'show'=>'types.show',
    'create'=>'types.create',
    'update'=>'types.update',
    'edit'=>'types.edit',
    'store'=>'types.store',
    'destroy'=>'types.destroy',
]);


Route::resource('books',BookController::class)->names(
    ['index'=>'books.index',
    'show'=>'books.show',
    'create'=>'books.create',
    'update'=>'books.update',
    'edit'=>'books.edit',
    'store'=>'books.store',
    'destroy'=>'books.destroy',
]);

Route::resource('dashboard',DashboardController::class)->names(
    ['index'=>'dashboard.index',
]);
});