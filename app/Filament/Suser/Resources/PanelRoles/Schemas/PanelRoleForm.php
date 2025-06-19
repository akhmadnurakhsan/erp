<?php

namespace App\Filament\Suser\Resources\PanelRoles\Schemas;

use App\Filament\Schemas\Forms\DescriptionInput;
use App\Filament\Schemas\Forms\NameInput;
use App\Filament\Schemas\Forms\StatusInput;
use App\Models\PanelRole;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PanelRoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Panel Role')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                NameInput::make()
                                    ->unique(PanelRole::class, ignoreRecord: true),

                            ]),

                        Grid::make(4)
                            ->schema([

                                DescriptionInput::make(),
                            ]),

                    ])
                    ->compact(),

                Section::make('Status')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                StatusInput::make(),

                            ]),
                    ])
                    ->compact(),
            ])->columns(1);
    }
}
