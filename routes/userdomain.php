<?php

use Illuminate\Support\Facades\Route;


Route::get('/', App\Livewire\Dashboard\Index::class)->name('dashboard');

Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');

Route::get('/choice', \App\Livewire\Projects\ChoiceProject::class)->name('projects.choice');
Route::get('/settings', \App\Livewire\Projects\Settings::class)->name('settings');

Route::get('/themes', App\Livewire\Themes\Index::class)->name('themes');

Route::get('/users', App\Livewire\Users\Index::class);
Route::get('/users/create', App\Livewire\Users\Create::class);

