<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentsController::class, 'index'])->name('std.index');
Route::post('/create-student', [StudentsController::class, 'newStudent'])->name('std.create');
    Route::get('/edit-student/{id}', [StudentsController::class, 'editStudent'])->name('std.edit');
    Route::post('/update-student/{id}', [StudentsController::class, 'updateStudent'])->name('std.update');
    Route::get('/delete-student/{id}', [StudentsController::class, 'deleteStudent'])->name('std.delete');