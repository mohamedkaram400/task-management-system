<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(TaskController::class)->prefix('task')->group(function () {
    Route::get('/', 'index')->name('all.tasks');
    Route::get('/create', 'create')->name('task.create');
    Route::post('/insert', 'insert')->name('task.insert');
    Route::get('/edit/{id}', 'edit')->name('task.edit');
    Route::put('/update/{id}', 'update')->name('task.update');
    Route::get('/show/{id}', 'show')->name('task.show');
    Route::delete('/delete/{id}', 'delete')->name('task.delete');
});