<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SmtpController;

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    //admin.dashboard
    Route::resource('permissions',PermissionController::class);
    Route::resource('roles',RoleController::class);
    Route::get('roles/{id}/give-permissions', [RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{id}/give-permissions', [RoleController::class, 'givePermissionToRole']);

    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});

Route::middleware('auth:admin')->group(function() {
    //Setting Route
    Route::prefix('setting')->group(function () {
        Route::resource('seo', SeoController::class)->only(['index', 'update']);
        Route::resource('smtp', SmtpController::class)->only(['index', 'update']);
        Route::resource('website', SettingController::class)->only(['index', 'update']);
        Route::resource('page', PageController::class);
    });
});

