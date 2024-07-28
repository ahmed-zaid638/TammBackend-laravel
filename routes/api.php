<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FAQController;
use App\Http\Controllers\Api\GoalController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\sliderController;
use App\Http\Controllers\Api\FormController;
use App\Http\Controllers\Api\ArticleController;

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/goals', [GoalController::class, 'index']);
Route::get('/faqs', [FAQController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index']);
Route::get('/sliders', [SliderController::class, 'index']);
Route::get('/articles', [ArticleController::class, 'index']);
// contact
Route::get('/contact', [FormController::class, 'index']);
Route::post('/contact', [FormController::class, 'store']);
