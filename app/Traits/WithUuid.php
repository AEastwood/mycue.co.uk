<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait WithUuid
{
    /**
     * Boot function from laravel.
     */
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = Str::uuid()->toString();
        });
    }
}
