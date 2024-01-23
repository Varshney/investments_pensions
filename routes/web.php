<?php

use App\Http\Controllers\Admin\ContactCompanyController;
use App\Http\Controllers\Admin\ContactContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InvestmentPlanController;
use App\Http\Controllers\Admin\InvestmentTypeController;
use App\Http\Controllers\Admin\PensionPlanController;
use App\Http\Controllers\Admin\PensionTypeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Company
    Route::resource('contact-companies', ContactCompanyController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Contacts
    Route::resource('contact-contacts', ContactContactController::class, ['except' => ['store', 'update', 'destroy']]);

    // Investment Plans
    Route::resource('investment-plans', InvestmentPlanController::class, ['except' => ['store', 'update', 'destroy']]);

    // Investment Types
    Route::resource('investment-types', InvestmentTypeController::class, ['except' => ['store', 'update', 'destroy']]);

    // Pension Type
    Route::resource('pension-types', PensionTypeController::class, ['except' => ['store', 'update', 'destroy']]);

    // Pension Plan
    Route::resource('pension-plans', PensionPlanController::class, ['except' => ['store', 'update', 'destroy']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
