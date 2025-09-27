<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::post('admin/login', [AdminController::class, 'loginAdmin']);
Route::get('ping', function () {
    return 'pong';
});