<?php

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
    $data = config('comics');
    return view('guest.home', $data);
})->name('home');

Route::get('/{id}', function ($id) {
    $data = collect(config('comics'));

    $selectedCard = $data->firstWhere('id', $id);

    return view('guest.card', [
        'title' => $selectedCard['title'] . ' - DC COMICS',
        'singleCard' => $selectedCard
    ]);

})->name('card');
