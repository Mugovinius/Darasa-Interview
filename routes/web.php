<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\AdminController;
use APP\Livewire\Controllers\QueryForm;

Route::get('/', function () {
    return view('welcome');
});
// Route to display the query form
Route::get('/create-query', [QueryController::class, 'create'])->name('query.create');
Route::post('/submit-query', [QueryController::class, 'store'])->name('submit.query');
Route::get('/admin/queries', [AdminController::class, 'index'])->name('admin.queries');
