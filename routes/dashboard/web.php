<?php

use App\Http\Controllers\Dashboard\Community\CommunityController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Head2Head\Head2HeadController;
use App\Http\Controllers\Dashboard\Leagues\LeagueController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->as('dashboard.')
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
    ->controller(DashboardController::class)
    ->group(function () {
        Route::get('', 'index')->name('index');
    });

Route::prefix('')->as('dashboard.')
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
    ->controller(DashboardController::class)
    ->group(function () {
        Route::resource('community', CommunityController::class);
        Route::resource('head2head', Head2HeadController::class);
        Route::resource('leagues', LeagueController::class);
    });
