<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Login;

Route::get('/hello', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin')->group(function () {
    Route::get('login', Login::class);
});
