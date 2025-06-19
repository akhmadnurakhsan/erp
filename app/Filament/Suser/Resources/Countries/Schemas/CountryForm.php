<?php

namespace App\Filament\Suser\Resources\Countries\Schemas;

use App\Filament\Schemas\Forms\DescriptionInput;
use App\Filament\Schemas\Forms\NameInput;
use App\Filament\Schemas\Forms\StatusInput;
use App\Models\Country;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CountryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Country')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                NameInput::make()
                                    ->unique(Country::class, ignoreRecord: true),

                            ]),

                        Grid::make(4)
                            ->schema([

                                DescriptionInput::make(),
                            ]),

                    ])
                    ->compact(),

                Section::make('ISO Country Data')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                TextInput::make('alpha_2')
                                    ->label('Alpha-2 Code'),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('alpha_3')
                                    ->label('Alpha-3 Code'),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('country_code')
                                    ->label('Country Code'),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('region')
                                    ->label('Region'),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('sub_region')
                                    ->label('Sub Region'),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('intermediate_region')
                                    ->label('Intermediate Region'),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('region_code')
                                    ->label('Region Code'),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('sub_region_code')
                                    ->label('Sub Region Code'),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('intermediate_region_code')
                                    ->label('Intermediate Region Code'),

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
