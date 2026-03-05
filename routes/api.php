<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Models\Category;

Route::get('/tasks', function () {
    return response()->json(Task::with('Category')->get());
});