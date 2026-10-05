<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

// raíz temporal, para que no salte el error de GitHub
Route::get('/', function () {
    return view('welcome');
});

Route::get('/ideas', [IdeaController::class, 'index']);

Route::get('/ideas/create', [IdeaController::class, 'create']);

Route::get('/ideas/{idea}', [IdeaController::class, 'show']);

Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit']);

Route::patch('/ideas/{idea}', [IdeaController::class, 'update']);

Route::post('/ideas', [IdeaController::class, 'store']);

Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy']);
