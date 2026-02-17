<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SimpleAuthController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/job-opportunities', function () {
    return view('opportunities');
})->name('opportunities');

Route::get('/catalogue', function () {
    return view('catalogue-page');
})->name('catalogue');

Route::get('/team', function () {
    return view('team-page');
})->name('team');

Route::post('/lang', function (Request $request) {
    $lang = $request->input('lang');

    if (!in_array($lang, ['ro', 'en'])) {
        $lang = 'ro';
    }

    session(['app_locale' => $lang]);

    cookie()->queue(cookie('app_locale', $lang, 60 * 24 * 30));

    return back();
})->name('lang.set');

Route::get('/select-stand', function () {
    return view('map-page');
});

Route::post('/login', [SimpleAuthController::class, 'login'])->name('login');
Route::post('/logout', [SimpleAuthController::class, 'logout'])->name('logout');