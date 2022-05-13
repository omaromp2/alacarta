<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\BillingPortalController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
        'laravelVersion' => Application::VERSION,        'phpVersion' => PHP_VERSION,
    ]);
});

Route::view('landing', 'landing');
// Route::view('landing2', 'landing2');

// Ruta ara q los clientes vean los rest
Route::get('rest/{restaurant}', [RestaurantController::class, 'showClient']);

// Route::get('qrcode', function () {
//     return QrCode::size(300)->generate('A basic example of QR code!');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::middleware('billing')->get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    // Route::get('/dashboard', function () {
    //         return Inertia::render('Dashboard');
    //     })
    //     ->name('dashboard');

    // Restaurants
    Route::resource('restaurant', RestaurantController::class)
    ->names([
        'index' => 'restaurants',
        'create' => 'restaurant/create',
        'view' => 'restaurant/{id}',
    ]);

    // Menu
    Route::resource('menu', MenuController::class)->names([
        'index' => 'menu',
        'create' => 'menu/create',
    ]);

    // QR gen
    Route::get('qr/{rest}', [RestaurantController::class, 'generateQR']);

    // Types
    Route::get('type/{rest_id}', [MenuController::class, 'typeGetter']);

    // Para obtener rest detras de las cortinas
    Route::get('restBack/{user_id}', [RestaurantController::class, 'getRest']);

    Route::get('tester', function () {
        return Inertia::render('tester');
    });

    // Upload imagenes de rest
    Route::post('imgrest/{id}', [RestaurantController::class, 'imgUpload']);

    Route::get('subscription', BillingController::class)->name('subscription');

    Route::get('billing-portal',BillingPortalController::class)->name('billing');
    // Route::get('newCus/{id}',[BillingController::class, 'createAsCus']);

});
