<?php

use App\Http\Controllers\NumberToTextController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/number-to-text/{number}', [NumberToTextController::class, 'translate']);