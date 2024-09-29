<?php

use App\Http\Controllers\School\SchoolAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\School\SchoolController;
use App\Http\Controllers\School\SchoolDepartmentController;
use App\Http\Controllers\School\SchoolEmployeeController;
use App\Http\Controllers\School\SchoolGradeLevelController;
use App\Http\Controllers\School\SchoolRoleController;
use App\Http\Controllers\School\SchoolSubjectController;
use App\Http\Middleware\IsSchoolAdmin;

Route::middleware(IsSchoolAdmin::class)->prefix('school')->name('school-')->group(function(){

    // School Auth Routes
    Route::controller(SchoolAuthController::class)->group(function(){
        Route::match(['get', 'post'], 'login', 'login')->name('login')
                ->withoutMiddleware([IsSchoolAdmin::class]);

        Route::any('logout', 'logout')->name('logout');
    });


    Route::controller(SchoolController::class)->group(function(){
        Route::get('dashboard', 'dashboard')->name('dashboard');
    });

    // School Roles Routes
    Route::controller(SchoolRoleController::class)->prefix('role')->group(function(){
        Route::get('', 'index')->name('role');

        Route::name('role-')->group(function(){
            Route::match(['get', 'post'], 'create', 'create')->name('create');
            Route::match(['get', 'patch'], 'edit/{role}', 'edit')->name('edit');
            Route::get('list', 'list')->name('list');

        });
    });

    // School Departments Routes
    Route::controller(SchoolDepartmentController::class)->prefix('department')->group(function(){
        Route::get('', 'index')->name('department');

        Route::name('department-')->group(function(){
            Route::match(['get', 'post'], 'create', 'create')->name('create');
            Route::match(['get', 'patch'], 'edit/{department}', 'edit')->name('edit');
            Route::get('list', 'list')->name('list');

        });
    });

    // School Employees Routes
    Route::controller(SchoolEmployeeController::class)->prefix('employee')->group(function(){
        Route::get('', 'index')->name('employee');

        Route::name('employee-')->group(function(){
            Route::match(['get', 'post'], 'create', 'create')->name('create');
            Route::get('list', 'list')->name('list');

        });
    });

    // School Grade Levels Routes
    Route::controller(SchoolGradeLevelController::class)->prefix('gradelevel')->group(function(){
        Route::get('', 'index')->name('gradelevel');

        Route::name('gradelevel-')->group(function(){
            Route::match(['get', 'post'], 'create', 'create')->name('create');
            Route::match(['get', 'post'], 'create-bulk', 'createBulk')->name('createbulk');
            // Route::match(['get', 'patch'], 'edit/{gradeLevel}', 'edit')->name('edit');
            Route::get('list', 'list')->name('list');
        });
    });

    // School Subject Routes
    Route::controller(SchoolSubjectController::class)->prefix('subject')->group(function(){
        Route::get('', 'index')->name('subject');

        Route::name('subject-')->group(function(){
            Route::match(['get', 'post'], 'create', 'create')->name('create');
            // Route::match(['get', 'patch'], 'edit/{gradeLevel}', 'edit')->name('edit');
            Route::get('list', 'list')->name('list');
        });
    });
});