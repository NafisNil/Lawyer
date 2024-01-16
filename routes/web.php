<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserRegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard',[HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

    /*user info */
    Route::get('user-info-edit', [UserRegistrationController::class, 'edit_info'])->name('edit_info_user');
    
});
 
Route::get('user-initial-registration', [UserRegistrationController::class, 'InitialRegistrationForm'])->name('user_initial_registration_form');
Route::post('user-initial-registration', [UserRegistrationController::class, 'InitialRegistration'])->name('user_initial_registration');

Route::get('user-main-registration', [UserRegistrationController::class, 'MainRegistrationForm'])->name('user_main_registration_form');
Route::post('user-main-registration', [UserRegistrationController::class, 'MainRegistration'])->name('user_main_registration');
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('district', DistrictController::class);
    Route::resource('type', TypeController::class);
});
require __DIR__.'/auth.php';



