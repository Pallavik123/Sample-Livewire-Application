<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Registeruser;
use App\Livewire\Dropdown;
use App\Livewire\FileUpload;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/counter',App\Livewire\Counter::class);
Route::get('/register',App\Livewire\Registeruser::class);
Route::get('/dropdown',App\Livewire\Dropdown::class);
Route::get('/fileupload',App\Livewire\FileUpload::class);