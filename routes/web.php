<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

require 'admin.php';

require 'school.php';

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/login', '/admin/login')->name('login');

Route::prefix('test')->controller(TestController::class)->group(function(){
    Route::get('/', 'index');
});
