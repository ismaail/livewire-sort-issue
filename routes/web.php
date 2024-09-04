<?php

use App\Models\Column;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with(
        'columns',
        Column::with('tasks')->get()
    );
});
