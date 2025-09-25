<?php

use App\Http\Controllers\AdminController;
use Illuminate\Routing\Route;

// API AMDIN
Route::post('admin/login', [AdminController::class, 'loginAdmin']);
