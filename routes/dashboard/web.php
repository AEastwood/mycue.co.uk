<?php

use App\Http\Controllers\Dashboard\Community\CommunityController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Head2Head\Head2HeadController;
use App\Http\Controllers\Dashboard\Leagues\LeagueController;
use Illuminate\Support\Facades\Route;

// Dashboard routes with middleware
Route::prefix('dashboard')->as('dashboard.')
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->controller(DashboardController::class)
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::resource('leagues', LeagueController::class)->only(['create', 'update']);
    });

// Publicly accessible routes (non-middleware)
Route::prefix('')->as('dashboard.')
    ->group(function () {
        Route::controller(LeagueController::class)->group(function () {
            Route::get('leagues', 'index')->name('leagues.index');
            Route::get('leagues/{league}', 'show')->name('leagues.show');
        });

        Route::controller(CommunityController::class)->group(function () {
            Route::get('community', 'index')->name('community.index');
        });

        Route::controller(Head2HeadController::class)->group(function () {
            Route::get('head2head', 'index')->name('head2head.index');
        });
    });
