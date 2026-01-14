<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Livewire\TodoList;

Route::get('/todolist', TodoList::class);