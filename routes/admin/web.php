<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Leagues\LeagueController;
use App\Http\Controllers\Admin\Settings\SettingController;
use App\Http\Controllers\Admin\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->as('admin.')
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
    ->controller(AdminController::class)
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::resource('leagues', LeagueController::class);
        Route::resource('settings', SettingController::class);
        Route::resource('users', UserController::class);

        Route::impersonate();
    });
