<?php

namespace App\Filament\Suser\Resources\Provinsis\Schemas;

use App\Filament\Schemas\Forms\DescriptionInput;
use App\Filament\Schemas\Forms\NameInput;
use App\Filament\Schemas\Forms\StatusInput;
use App\Models\Country;
use App\Models\Provinsi;
use Filament\Forms\Components\Select;
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

                                NameInput::make()
                                    ->unique(Provinsi::class, ignoreRecord: true),

                            ]),

                        Grid::make(4)
                            ->schema([

                                DescriptionInput::make(),
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

                                StatusInput::make(),

                            ]),
                    ])
                    ->compact(),
            ])->columns(1);
    }
}
