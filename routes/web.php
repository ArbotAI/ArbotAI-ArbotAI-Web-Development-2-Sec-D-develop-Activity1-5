<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;


// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


Route::middleware([AuthMiddleware::class])->group(function () {
Route::get('/', [StudentsController::class, 'index'])->name('std.index');
Route::post('/create-student', [StudentsController::class, 'newStudent'])->name('std.create');
    Route::get('/edit-student/{id}', [StudentsController::class, 'editStudent'])->name('std.edit');
    Route::post('/update-student/{id}', [StudentsController::class, 'updateStudent'])->name('std.update');
    Route::get('/delete-student/{id}', [StudentsController::class, 'deleteStudent'])->name('std.delete');
    });