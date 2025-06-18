<?php

namespace App\Filament\Suser\Resources\Provinsis\Schemas;

use App\Models\Country;
use App\Models\Provinsi;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProvinsiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Provinsi')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                TextInput::make('name')
                                    ->label('Name')
                                    ->required()
                                    ->unique(Provinsi::class, ignoreRecord: true),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('description')
                                    ->label('Description')
                                    ->required(),
                            ]),

                    ])
                    ->compact(),

                Section::make('Country')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                Select::make('country_id')
                                    ->label('Country')
                                    ->required()
                                    ->native(false)
                                    ->options(Country::pluck('description', 'id'))
                                    ->searchable(),

                            ]),

                    ])
                    ->compact(),

                Section::make('Status')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                Radio::make('is_active')
                                    ->label('Active?')
                                    ->boolean()
                                    ->inline()
                                    ->default(true),

                            ]),
                    ])->collapsible()
                    ->compact(),
            ])->columns(1);
    }
}
