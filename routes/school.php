<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\School\SchoolController;

Route::controller(SchoolController::class)->prefix('school')->name('school-')->group(function(){
    
    Route::match(['get','post'],'login' , 'login')->name('login');
    /*
    |------------------------------------------------------------------------
    | School Auth or Middelware Routes
    |------------------------------------------------------------------------
    */
    Route::get('get-city/{id?}', [SchoolController::class,'getCity'])->name('get-city');

    Route::group(['middleware' => ['auth:school']], function () {
        Route::get('dashboard' , 'index')->name('dashboard');
        Route::get('logout' , 'logout')->name('logout');    
        
        Route::prefix('profile')->group(function () {
            Route::match(['get','post'],'update','updateProfile')->name('profile-update');
        });
    });
    
});