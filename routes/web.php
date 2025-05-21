<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('sendmail',[MailController::class,'SendEmail'])->name('send.mail');
Route::view('sendmail','SendEmail');