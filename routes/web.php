<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ProjectsController;


Route::get('/', [MasterController::class, 'showHome']);
Route::get('/over-mij', [MasterController::class, 'showAboutMe']);
Route::get('/mijn-werk', [ProjectsController::class, 'showWork']);
Route::get('/contact', [MasterController::class, 'showContact']);
Route::get('/super-orange', [MasterController::class, 'showSuperOrange']);