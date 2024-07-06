<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BoosterController;
use App\Http\Controllers\UserController;
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

/*   Admin Route    */

Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminController::class, 'Index'])
        ->name('login_form');

    Route::post('/login/owner', [AdminController::class, 'login'])
        ->name('admin.login');

    Route::get('/dashboard', [AdminController::class, 'Dashboard'])
        ->name('admin.dashboard')->middleware('admin');


    Route::get('/booster', [AdminController::class, 'AdminBooster'])
        ->name('admin.booster')->middleware('admin');

    Route::get('/logout', [AdminController::class, 'AdminLogout'])
        ->name('admin.logout')->middleware('admin');

    Route::get('/register', [AdminController::class, 'AdminRegister'])
        ->name('admin.register');

    Route::post('/register/create', [AdminController::class, 'AdminRegisterCreate'])
        ->name('admin.register.create');

    Route::get('/customer', [AdminController::class, 'AdminCustomer'])
        ->name('admin.customer')->middleware('admin');

    Route::get('/customer/{user}', [UserController::class, 'EditUser'])->name('customer.edit')->middleware('admin');
    Route::put('/customer-updated/{user}', [UserController::class, 'UpdateUser'])->name('customer.update')->middleware('admin');

});

/*   End Admin Route    */



/*   Booster Route    */

Route::prefix('booster')->group(function(){
    Route::get('/login', [BoosterController::class, 'Index'])
        ->name('booster_login_form');

    Route::get('/dashboard', [BoosterController::class, 'BoosterDashboard'])
        ->name('booster.dashboard')->middleware('booster');

    Route::post('/login/owner', [BoosterController::class, 'BoosterLogin'])
        ->name('booster.login');

    Route::get('/logout', [BoosterController::class, 'BoosterLogout'])
        ->name('booster.logout')->middleware('booster');

    Route::get('/register', [BoosterController::class, 'BoosterRegister'])
        ->name('booster.register');

    Route::post('/register/create', [BoosterController::class, 'BoosterRegisterCreate'])
        ->name('booster.register.create');
});

/*   End Booster Route    */




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
