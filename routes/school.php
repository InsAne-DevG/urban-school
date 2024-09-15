<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\School\SchoolController;
use App\Http\Middleware\DefaultAuthGuard;

Route::controller(SchoolController::class)->prefix('school')->name('school-')->group(function(){
    
    Route::match(['get','post'],'login' , 'login')->name('login');
    /*
    |------------------------------------------------------------------------
    | School Auth or Middelware Routes
    |------------------------------------------------------------------------
    */
    Route::get('get-city/{id?}', [SchoolController::class,'getCity'])->name('get-city');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('dashboard' , 'index')->name('dashboard');
        Route::get('logout' , 'logout')->name('logout');    
        
        Route::prefix('profile')->group(function () {
            Route::match(['get','post'],'update','updateProfile')->name('profile-update');
        });

        Route::prefix('school')->group(function () {
            Route::get('list', [SchoolController::class, 'list'])->name('school-list');
            Route::match(['get','post'],'edit/{id?}', [SchoolController::class, 'edit'])->name('school-edit');
            Route::match(['get','post'],'create', [SchoolController::class, 'create'])->name('school-create');
            Route::get('delete/{id?}', [SchoolController::class, 'delete'])->name('school-delete');
            Route::get('show/{id?}', [SchoolController::class, 'show'])->name('school-show');
            Route::post('status', [SchoolController::class, 'status'])->name('school-status');
            Route::get('export/{type?}', [SchoolController::class, 'export'])->name('school-export');
        });

    })->middleware([DefaultAuthGuard::class])->middleware('check.status');
    
});