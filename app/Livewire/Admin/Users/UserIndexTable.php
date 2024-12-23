<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class UserIndexTable extends DataTableComponent
{

    /**
     * @return Builder
     */
    public function builder(): Builder
    {
        return User::query()->orderBy('name');
    }

    /**
     * @return void
     */
    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->searchable(),
            Column::make('Name', 'name')->searchable(),
            Column::make('Email', 'email')->searchable(),
            LinkColumn::make('Action')
                ->title(fn($row) => 'View')
                ->location(fn($row) => route('admin.users.show', $row)),
        ];
    }
}
