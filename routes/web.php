<?php

use App\Http\Controllers\SmsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('sendSMS', [SmsController::class, 'index']);
