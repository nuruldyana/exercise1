<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('create', [MemberController::class, 'create']);
Route::post('create', [MemberController::class, 'store']);
Route::get('show', [MemberController::class, 'show']);
Route::get('delete/{id}', [MemberController::class, 'delete']);
Route::get('edit/{id}', [MemberController::class, 'edit']);
Route::post('edit', [MemberController::class, 'update']);

