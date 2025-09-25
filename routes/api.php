<?php
use Illuminate\Routing\Route;

// API AMDIN
Route::post('admin/login', [AdminController::class, 'loginAdmin']);
