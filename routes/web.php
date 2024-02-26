<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonebookController;
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

Route::get('/dashboard', function () {
    return view('dashboard/content');
});

Route::get('/settings', function () {
    return view('settings/content');
});

Route::get('/contact', function () {
    return view('contact/content'); //path of your view file
});



Route::get('/phonebook', function () {

    return view('phonebook/content');
});

Route::get('/phonebook', [PhonebookController::class, 'index'])->name('phonebook.index');
Route::post('/store', [PhonebookController::class, 'store'])->name('phonebook.store');

Route::get('/edit/{id}', [PhonebookController::class, 'edit'])->name('phonebook.edit');
Route::put('/update', [PhonebookController::class, 'update'])->name('phonebook.update');
Route::get('/delete/{id}', [PhonebookController::class, 'delete'])->name('phonebook.delete');