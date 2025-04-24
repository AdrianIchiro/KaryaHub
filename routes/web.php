<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Dashboard;
use App\Livewire\Position;
use App\Livewire\CreatePosition;
use App\Livewire\EditPosition;

Route::get('/', Dashboard::class)->name('dashboard');

// posisi kerja
Route::get('posisi-kerja', Position::class)->name('posisi-kerja.index');
Route::get('posisi-kerja/buat', CreatePosition::class)->name('posisi-kerja.create');
Route::get('posisi-kerja/{id}/edit', EditPosition::class)->name('posisi-kerja.edit');


Route::get('/counter', Counter::class);
