<?php

namespace App\Livewire\Forms\Dashboard\Leagues;

use App\Enums\Dashboard\GameTypes\GameType;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Enum;
use Livewire\Form;

class CreateLeagueForm extends Form
{

    /**
     * @var string
     */
    public string $game;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $slug;

    /**
     * @return void
     */
    public function generateSlug(): void
    {
        $this->slug = Str::slug($this->name);
    }

    /**
     * Validation rules.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'game' => ['required', 'string', new Enum(GameType::class)],
            'name' => ['required', 'string', 'min:3', 'max:255', 'unique:leagues,name'],
        ];
    }

    /**
     * Custom error messages.
     *
     * @var array|string[]
     */
    public array $messages = [
        'game.required' => 'You must select a game before creating a league',
    ];
}
