<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

Route::get('/', function () {
    return view('landing'); // resources/views/landing.blade.php
})->name('landing');

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
