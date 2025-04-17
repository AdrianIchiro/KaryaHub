<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Dashboard;

Route::get('/', Dashboard::class);


Route::get('/counter', Counter::class);
