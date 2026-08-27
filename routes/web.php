<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::livewire('/teachers', 'teacher.index')
    ->name('teachers.index');

    Route::livewire('/create-teacher', 'teacher.create')
        ->name('teacher.create');

});

require __DIR__.'/settings.php';
