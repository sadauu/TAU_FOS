<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('attendant')->user();

    //dd($users);

    return view('attendant.home');
})->name('home');

