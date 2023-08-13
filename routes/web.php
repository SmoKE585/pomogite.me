<?php

use Illuminate\Support\Facades\Route;


Route::get('/start', \App\Livewire\Auth\Register\AccountCreate::class)->name('start.accountcreate');

Route::middleware(['web', 'auth'])->group(function() {
    Route::get('/start/project', \App\Livewire\Auth\Register\ProjectCreate::class)->name('start.projectcreate');

});
