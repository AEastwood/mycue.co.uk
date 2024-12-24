<?php

namespace App\Livewire\Admin\Leagues;

use App\Models\Dashboard\Leagues\League;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class LeagueIndexTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function builder(): Builder
    {
        return League::query()->orderBy('name');
    }

    /**
     * @return void
     */
    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setAdditionalSelects([
            'user_id'
        ]);
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->searchable()->hideIf(auth()->id() !== 2),
            Column::make('Name', 'name')->searchable(),
            Column::make('Game', 'game')->searchable(),
            Column::make('Admin', 'name')->searchable()->label(function ($row) {
                return '<a class="text-blue-600" href="#">' . $row->admin->name . '</a>';
            })->html(),
            Column::make('Slug', 'slug')->searchable()->hideIf(auth()->id() !== 2),
            LinkColumn::make('Action')
                ->title(fn($row) => 'View')
                ->location(fn($row) => route('admin.leagues.show', $row)),
        ];
    }


}
