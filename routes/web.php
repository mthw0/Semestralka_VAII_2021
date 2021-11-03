<?php

use App\Http\Controllers\KontrolaController;
use App\Http\Controllers\MiestaController;
use App\Http\Controllers\ObjednavkaController;
use App\Http\Controllers\OckovanieController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;
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
    return view('posts.index');
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


Route::group(['middleware'=>['auth']], function () {

    Route::get('/users', function () {
        return view ('users');
    });
    Route::get('/admin', function () {
        return view ('home');
    });
    Route::resource('objednavky',ObjednavkaController::class);
    Route::resource('users', UserController::class);
});
//Route::resource('objednavky',ObjednavkaController::class);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::resource('posts', 'App\Http\Controllers\PostController');
Route::resource('comments', 'App\Http\Controllers\CommentController');

Route::get('objednavky/create', [ObjednavkaController::class, 'create'])->name('objednavky');

Route::resource('miesta', MiestaController::class);
Route::resource('ockovanie',OckovanieController::class);
Route::resource('kontrola',KontrolaController::class);

Route::redirect('/home','posts');
//Route::delete('objednavky/{id}','ObjednavkaController@destroy')->name('objednavky.destroy');
//Route::get('/objednavky/{objednavka}/edit', [ObjednavkaController::class, 'edit']);
