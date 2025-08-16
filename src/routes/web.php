<?php

use App\Http\Controllers\Admin\ClearCacheController;
use Illuminate\Support\Facades\Route;
use App\Models\Settings;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use App\Http\Controllers\AutoTaskController;
use App\Http\Controllers\HomePageController;
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

require __DIR__ . '/admin/web.php';
require __DIR__ . '/user/web.php';
require __DIR__ . '/botman.php';

//activate and deactivate Online Trader
Route::any('/activate', function () {
	return view('activate.index', [
		'settings' => Settings::where('id', '1')->first(),
	]);
});

Route::get('register-license', [ClearCacheController::class, 'saveLicense']);

Route::any('/revoke', function () {
	return view('revoke.index');
});

Route::post('/reset-password', [NewPasswordController::class, 'store'])
	->middleware(['guest:' . config('fortify.guard')])
	->name('password.update');

//cron url
Route::get('/cron',[AutoTaskController::class, 'autotopup'])->name('cron');
//Front Pages Route
Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('terms', [HomePageController::class, 'terms'] )->name('terms');
Route::get('privacy',[HomePageController::class, 'privacy'])->name('privacy');
Route::get('about', [HomePageController::class, 'about'])->name('about');
Route::get('contacts',[HomePageController::class, 'contact'])->name('contact');
Route::get('contact',[HomePageController::class, 'contact'])->name('contact');
Route::get('faq', [HomePageController::class, 'faq'])->name('faq');
Route::get('why-us', [HomePageController::class, 'whyus'])->name('why-us');
Route::get('regulation', [HomePageController::class, 'regulation'])->name('regulation');
Route::get('etfs', [HomePageController::class, 'etfs'])->name('etfs');
Route::get('forex', [HomePageController::class, 'forex'])->name('forex');

Route::get('for-traders', [HomePageController::class, 'fortrader'])->name('fortrader');
Route::get('trading-conditions', [HomePageController::class, 'trading_conditions'])->name('trading_conditions');
Route::get('cryptocurrencies', [HomePageController::class, 'cryptocurrencies'])->name('cryptocurrencies');
Route::get('indices', [HomePageController::class, 'indices'])->name('indices');
Route::get('shares', [HomePageController::class, 'shares'])->name('shares');
Route::get('nfts', [HomePageController::class, 'nfts'])->name('nfts');
Route::get('trade', [HomePageController::class, 'trade'])->name('trade');

Route::get('automate', [HomePageController::class, 'automate'])->name('automate');
Route::get('copy', [HomePageController::class, 'copy'])->name('copy');
Route::get('tradings', function(){
    return view('home.about');
});

Route::get('trading', function(){
    return view('home.about');
});

Route::get('terms', function(){
    return view('home.terms');
});

Route::get('index', function(){
    return view('home.index');
});
