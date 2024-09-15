<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Middleware\DefaultAuthGuard;

Route::prefix('admin')->name('admin-')->group(function(){
    
    // Authentication Routes
    Route::match(['get','post'],'login' , [AdminController::class, 'login'])->name('login');
    Route::get('get-city/{id?}', [AdminController::class,'getCity'])->name('get-city');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::controller(AdminController::class)->group(function(){
            Route::get('dashboard' , 'index')->name('dashboard');
            Route::get('logout' , 'logout')->name('logout');
                
            Route::prefix('profile')->group(function () {
                Route::match(['get','post'],'update','updateProfile')->name('profile-update');
            });
        });

        // School Routes
        Route::prefix('school')->name('school-')->controller(SchoolController::class)->group(function () {
            Route::get('list', 'list')->name('list');
            Route::match(['get','post'],'edit/{school?}', 'edit')->name('edit');
            Route::match(['get','post'],'create', 'create')->name('create');
            Route::get('delete/{id?}', 'delete')->name('delete');
            Route::get('show/{id?}', 'show')->name('show');
            Route::post('status', 'status')->name('status');
            Route::get('export/{type?}', 'export')->name('export');
        });
    })->middleware([DefaultAuthGuard::class])->middleware('check.status');
    
});