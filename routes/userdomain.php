<?php

use Illuminate\Support\Facades\Route;


Route::get('/projects', \App\Livewire\Projects\Index::class)->name('projects');

Route::get('/users', App\Livewire\Users\Index::class);
Route::get('/users/create', App\Livewire\Users\Create::class);

