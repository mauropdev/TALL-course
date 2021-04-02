<?php

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('subscriber', [SubscriberController::class, 'all'])
    ->name('subscribers.all');