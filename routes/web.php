<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\FrondendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CounterSectionController;
use App\Http\Controllers\CounterItemController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactListController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StandaloneController;
use App\Http\Controllers\StandaloneItemController;
use App\Http\Controllers\LangButtonController;
use App\Http\Controllers\Auth\RegisteredUserController;




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


Route::get('/dashboard', function () {
    return view('dashboart.adminpanel.index');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
Route::get('/', [FrondendController::class, 'index'])->name('index');
Route::get('/standalone/page', [FrondendController::class, 'standalone'])->name('standalone.page');

//language route
Route::get('/locale/{locale}', [LocalizationController::class, 'setLocale'])->name('language');
//my route start
Route::resource('/menu', MenuController::class)->middleware('auth');
Route::resource('/home', HomeController::class)->middleware('auth');
Route::resource('/portfolio', PortfolioController::class)->middleware('auth');
Route::resource('/counterSection', CounterSectionController::class)->middleware('auth');
Route::resource('/counterItem', CounterItemController::class)->middleware('auth');
Route::resource('/review', ReviewController::class)->middleware('auth');
Route::resource('/blog', BlogController::class)->middleware('auth');
Route::resource('/contact', ContactController::class)->middleware('auth');
Route::resource('/contactList', ContactListController::class)->middleware('auth');
//message route start
Route::get('/message', [MessageController::class, 'index'])->name('message.index')->middleware('auth');
Route::get('/message/show/{id}', [MessageController::class, 'show'])->name('message.show')->middleware('auth');
Route::post('/message/store', [MessageController::class, 'store'])->name('message.store');
Route::get('/status/{id}', [MessageController::class, 'status'])->name('status')->middleware('auth');
Route::get('/public/message/{id}', [MessageController::class, 'publicMessage'])->name('public.message')->middleware('auth');
Route::delete('/destroy/{id}', [MessageController::class, 'destroy'])->name('message.destroy')->middleware('auth');
//message route end
Route::resource('/setting', SettingController::class)->middleware('auth');
Route::resource('/standalone', StandaloneController::class)->middleware('auth');
Route::resource('/standaloneItem', StandaloneItemController::class)->middleware('auth');
Route::resource('/langButton', LangButtonController::class)->middleware('auth');



