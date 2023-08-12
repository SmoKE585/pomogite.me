<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
Route::get('/start', \App\Livewire\Auth\Register\AccountCreate::class)->name('start.accountcreate');
Route::get('/start/project', \App\Livewire\Auth\Register\ProjectCreate::class)->name('start.projectcreate');


Route::get('/users', App\Livewire\Users\Index::class);
Route::get('/users/create', App\Livewire\Users\Create::class);
