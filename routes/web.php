<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\KontrolaController;
use App\Http\Controllers\MiestaController;
use App\Http\Controllers\ObjednavkaController;
use App\Http\Controllers\OckovanieController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('co_je_covid');
});

Route::get('/novinky', function () {
    return view('posts.index');
});

Route::get('/co-je-covid', function () {
    return view('co_je_covid');
});

Route::get('/aktualne-opatrenia', function () {
    return view('aktualne_opatrenia');
});

Route::get('/ockovacie-miesta', function () {
    return view('miesta.index');
});

Auth::routes();

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/users', function () {
        return view('users');
    });
    Route::get('/admin', function () {
        return view('home');
    });
    Route::get('/objednavky', function () {
        return view('objednavky.index');
    });
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);

    Route::post('/miesta', [MiestaController::class, 'store'])->name('miesta.create');
    Route::get('/miesta', [MiestaController::class, 'index'])->name('miesta.index');
    Route::get('/noveMiesto', [MiestaController::class, 'create'])->name('miesta.create');
    Route::post('/noveMiesto', [MiestaController::class, 'store'])->name('miesta.store');
    Route::get('/miesta/{id}/edit', [MiestaController::class, 'edit'])->name('miesta.edit');
    Route::patch('/miesta/{id}', [MiestaController::class, 'update'])->name('miesta.update');
    Route::delete('/miesta/{id}', [MiestaController::class, 'destroy'])->name('miesta.destroy');
    Route::get('/objednavky', [ObjednavkaController::class, 'index'])->name('objednavky.index');
    Route::get('objednavky/fetch', [ObjednavkaController::class, 'fetch']);
    Route::get('/novaObjednavka', [ObjednavkaController::class, 'create'])->name('objednavky.create');
    Route::post('/novaObjednavka', [ObjednavkaController::class, 'store'])->name('objednavky.store');
    Route::get('/objednavky/{id}/edit', [ObjednavkaController::class, 'edit'])->name('objednavky.edit');
    Route::patch('/objednavky/{id}', [ObjednavkaController::class, 'update'])->name('objednavky.update');
    Route::delete('/objednavky/{id}', [ObjednavkaController::class, 'destroy'])->name('objednavky.destroy');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/novyClanok', [PostController::class, 'create'])->name('posts.create');
    Route::post('/novyClanok', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::patch('/posts/{slug}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{slug}', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::get('/register', function () {
    return abort(403);
});

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/registracia', [ObjednavkaController::class, 'create'])->name('objednavky.create');
Route::post('/objednavky/create', [ObjednavkaController::class, 'store'])->name('objednavky.store');

Route::get('/miesta', [MiestaController::class, 'index'])->name('miesta.index');

Route::get('/ockovanie', [OckovanieController::class, 'index'])->name('ockovanie.index');

Route::resource('kontrola', KontrolaController::class);

Route::resource('comments', CommentController::class);

Route::redirect('/home', 'posts');
