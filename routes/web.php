<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DailyController;
use App\Http\Controllers\MonthlyController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(DailyController::class)->prefix('daily')->group(function () {
        Route::get('', 'index')->name('daily');
        Route::get('create', 'create')->name('daily.create');
        Route::post('store', 'store')->name('daily.store');
        Route::get('show/{id}', 'show')->name('daily.show');
        Route::get('edit/{id}', 'edit')->name('daily.edit');
        Route::put('edit/{id}', 'update')->name('daily.update');
        Route::delete('destroy/{id}', 'destroy')->name('daily.destroy');
    });

    Route::controller(MonthlyController::class)->prefix('monthly')->group(function () {
        Route::get('', 'index')->name('monthly');
        Route::get('create', 'create')->name('monthly.create');
        Route::post('store', 'store')->name('monthly.store');
        Route::get('show/{id}', 'show')->name('monthly.show');
        Route::get('edit/{id}', 'edit')->name('monthly.edit');
        Route::put('edit/{id}', 'update')->name('monthly.update');
        Route::delete('destroy/{id}', 'destroy')->name('monthly.destroy');
    });
 
 
    // Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});