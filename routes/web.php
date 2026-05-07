<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/projects', function () {
    return view('projects'); 
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/projects/detail', function () {
    return view('project-detail');
});
Route::get('/profile', function () {
    return view('profile');
});