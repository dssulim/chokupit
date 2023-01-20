<?php

use App\Http\Controllers;
use App\Http\Controllers\MyFriendsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShoppingListController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use App\Http\Controllers\UsersController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::get('/about', AboutController::class, 'about') -> name('about');
Route::get('/calendar_page', CalendarController::class, 'calendar') -> name('calendar');

Route::resource('/my_friends', MyFriendsController::class);
Route::resource('/users', UsersController::class);

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Кэш очищен.";});

Route::resources([
    'shoppingLists' => ShoppingListController::class,
    'catalogs' => CatalogController::class,
    'shops' => ShopController::class,
    'products' => ProductController::class
]);

// Route::get('/shoppingLists', [ShoppingListController::class, 'index']);
// Route::get('/shoppingLists', 'App\Http\Controllers\ShoppingListController@index');

//Route::post('/catalogs', [CatalogController::class, 'store'])->name('catalogs.store');

Route::get('/test_DB', function() {
    if (DB::connection()->getDatabaseName())  {
      dd('Есть контакт!');
    } else {
      return 'Соединения нет';
    }
});

Route::get('/home', function () {
    return Inertia::render('Home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
