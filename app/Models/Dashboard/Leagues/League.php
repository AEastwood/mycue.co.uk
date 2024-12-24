<?php

namespace App\Models\Dashboard\Leagues;

use App\Models\User;
use App\Traits\WithUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

}
