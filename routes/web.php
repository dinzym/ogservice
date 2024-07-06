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

    /* User/Customer Crud */

    Route::get('/customer', [AdminController::class, 'AdminCustomer'])
        ->name('admin.customer')->middleware('admin')->middleware('admin');

    Route::put('/customer/{user}', [UserController::class, 'EditUser'])->name('customer.edit')->middleware('admin');

    Route::put('/customer-updated/{user}', [UserController::class, 'UpdateUser'])->name('customer.update')->middleware('admin');

    Route::get('/delete-customer/{user}', [UserController::class, 'confirmDelete'])->name('customer.confirm-delete')->middleware('admin');

    Route::post('/delete-customer/{user}', [UserController::class, 'DeleteUser'])->name('customer.delete')->middleware('admin');

    /* Booster Crud */

    Route::get('/booster', [AdminController::class, 'AdminBooster'])
        ->name('admin.booster')->middleware('admin');

    Route::put('/booster/{booster}', [BoosterController::class, 'EditBooster'])->name('booster.edit')->middleware('admin');

    Route::put('/booster-updated/{booster}', [BoosterController::class, 'UpdateBooster'])->name('booster.update')->middleware('admin');

    Route::get('/delete-booster/{booster}', [BoosterController::class, 'confirmDelete'])->name('booster.confirm-delete')->middleware('admin');

    Route::post('/delete-booster/{booster}', [BoosterController::class, 'DeleteBooster'])->name('booster.delete')->middleware('admin');

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

    Route::get('/profile', function () {
        return view('booster.profile');
    })->middleware('booster')->name('booster.profile');

    Route::get('/chat-booster',
        'App\Http\Controllers\BoosterController@booster')
        ->middleware('booster')->name('booster.chat');

    Route::post('/chat-broadcast',
        'App\Http\Controllers\BoosterController@broadcast')
        ->middleware('booster')->name('booster.broadcast');

    Route::post('/chat-receive',
        'App\Http\Controllers\BoosterController@receive')
        ->middleware('booster');
});

/*   End Booster Route    */


/*   Game Route    */

Route::get('/game/csgo', function () {
    return view('game.csgo');
})->middleware(['auth'])->name('games.csgo');

Route::get('/game/valorant', function () {
    return view('game.valorant');
})->middleware(['auth'])->name('games.valorant');

Route::get('/game/fifa23', function () {
    return view('game.fifa23');
})->middleware(['auth'])->name('games.fifa23');

Route::get('/game/apexlegends', function () {
    return view('game.apexlegends');
})->middleware(['auth'])->name('games.apexlegends');

Route::get('/game/warzone', function () {
    return view('game.warzone');
})->middleware(['auth'])->name('games.warzone');

Route::get('/game/overwatch2', function () {
    return view('game.overwatch');
})->middleware(['auth'])->name('games.overwatch');

/*   End Game Route    */

/*    User's Profile Route    */

Route::get('/profile', function () {
    return view('user.dashboard');
})->middleware(['auth'])->name('gamer.dashboard');

//Route::get('/profile', [UserController::class, 'profile'])->middleware(['auth'])->name('gamer.dashboard');

/*   End User's Profile Route    */
    
Route::get('/booster', [BoosterController::class, 'listBooster'])->middleware(['auth'])->name('gamer.booster');

/*  Chat Route    */

Route::get('/chat', 'App\Http\Controllers\PusherController@index')->middleware(['auth']);
Route::post('/broadcast', 'App\Http\Controllers\PusherController@broadcast')->middleware(['auth']);
Route::post('/receive', 'App\Http\Controllers\PusherController@receive')->middleware(['auth']);

/*   End Chat Route    */


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
