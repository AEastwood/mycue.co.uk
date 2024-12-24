<?php

namespace App\Models\Dashboard\Leagues;

use App\Models\User;
use App\Traits\WithUuid;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class League extends Model
{
    use WithUuid;

    /**
     * @var array
     */
    protected $fillable = [
        'game',
        'name',
        'slug',
        'user_id',
    ];

    /**
     * @return BelongsTo
     */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->user_id === Auth::id();
    }

    /**
     * @return Attribute
     */
    public function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Str::ucfirst($value),
            set: fn($value) => Str::lower($value),
        );
    }

}
