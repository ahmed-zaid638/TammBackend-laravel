<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FAQController;
use App\Http\Controllers\Api\GoalController;
use App\Http\Controllers\Api\ServiceController;



Route::get('/services', [ServiceController::class, 'index']);
Route::get('/goals', [GoalController::class, 'index']);
Route::get('/faqs', [FAQController::class, 'index']);
