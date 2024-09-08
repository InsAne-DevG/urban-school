<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/login', '/admin/login')->name('login');

require 'admin.php';

require 'school.php';
