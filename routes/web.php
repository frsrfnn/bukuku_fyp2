<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ListingController;


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

/*
-----Welcome Page----------------------------------------------------------
*/
Route::get('/', function(){
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('welcome');
/*
-----Home--------------------------------------------------------------
*/ 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*
-----Category--------------------------------------------------------------
*/ 
Route::get('/category', [CategoryController::class, 'index'])->name('category');

/*
-----Contact Us-------------------------------------------------------------
*/ 
Route::get('/contactus', [ContactusController::class, 'index'])->name('contactus');
/*
-----Profile--------------------------------------------------------------
*/ 
//Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
/*
-----addListing--------------------------------------------------------------
*/ 
Route::get('/listing', [ListingController::class, 'addBook'])->name('addBook');
Route::post('/listing', [ListingController::class, 'create'])->name('addBook.store');

Route::get('/dashboard', function(){
    return Inertia::render('Dashboard');
})->name('dashboard');