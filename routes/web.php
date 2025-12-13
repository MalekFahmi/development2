<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\categorycontroller;
use App\Http\Controllers\Admin\classificationcontroller;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserBookController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('landing');
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

Route::get('/login', [AuthController::class, 'adminLogin'])->name('login');
Route::post('/Checklogin', [AuthController::class, 'adminCheckLogin'])->name('check');
});

Route::resource('user/books',UserBookController::class)->names(
    ['index'=>'user.books.index']);

Route::resource('user/cart',CartController::class)->names(
    ['index'=>'cart.index',
    'show'=>'cart.show',
    'create'=>'cart.create',
    'update'=>'cart.update',
    'edit'=>'cart.edit',
    'store'=>'cart.store',
    'destroy'=>'cart.destroy',
]);

Route::get('/user/login', [AuthController::class, 'userLogin'])->name('user.login');
Route::post('/user/check', [AuthController::class, 'userCheckLogin'])->name('user.check');



Route::get('/user/home', [UserBookController::class, 'index'])->name('user.home');
    Route::get('/user/books/search', [UserBookController::class, 'search'])->name('user.books.search');



Route::get('/login', function () : RedirectResponse {

    $intendedUrl = Session::get('url.intended');

    $path = $intendedUrl ? parse_url($intendedUrl, PHP_URL_PATH) : '/';

    if (str_starts_with($path, '/admin')) {
        return redirect()->route('admin.login');
    }

    if (str_starts_with($path, '/user')) {
        return redirect()->route('user.login');
    }

    return redirect()->action([HomeController::class, 'index']);

})->name('login');
