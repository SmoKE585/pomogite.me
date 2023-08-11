<?php

use Illuminate\Support\Facades\Route;


Route::get('/', \App\Livewire\Auth\Login::class);

Route::get('/users', App\Livewire\Users\Index::class);
Route::get('/users/create', App\Livewire\Users\Create::class);
