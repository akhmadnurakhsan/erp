<?php

namespace App\Filament\Suser\Resources\Kodepos\Schemas;

use App\Filament\Schemas\Forms\DescriptionInput;
use App\Filament\Schemas\Forms\NameInput;
use App\Filament\Schemas\Forms\StatusInput;
use App\Models\Country;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kodepos;
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

class KodeposForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Kodepos')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                NameInput::make()
                                    ->unique(Kodepos::class, ignoreRecord: true),

                            ]),

                        Grid::make(4)
                            ->schema([

                                DescriptionInput::make()
                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('kodepos')
                                    ->label('Kodepos')
                                    ->required(),
                            ]),

                    ])
                    ->compact(),

                Section::make('Data Wilayah')
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

                        Grid::make(4)
                            ->schema([

                                Select::make('provinsi_id')
                                    ->label('Provinsi')
                                    ->required()
                                    ->native(false)
                                    ->options(Provinsi::pluck('description', 'id'))
                                    ->searchable(),

                            ]),

                        Grid::make(4)
                            ->schema([

                                Select::make('kabupaten_id')
                                    ->label('Kabupaten')
                                    ->required()
                                    ->native(false)
                                    ->options(Kabupaten::pluck('description', 'id'))
                                    ->searchable(),

                            ]),

                        Grid::make(4)
                            ->schema([

                                Select::make('kecamatan_id')
                                    ->label('Kecamatan')
                                    ->required()
                                    ->native(false)
                                    ->options(Kecamatan::pluck('description', 'id'))
                                    ->searchable(),

                            ]),

                        Grid::make(4)
                            ->schema([

                                Select::make('kelurahan_id')
                                    ->label('Kelurahan')
                                    ->required()
                                    ->native(false)
                                    ->options(Kelurahan::pluck('description', 'id'))
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
                    ])->collapsible()
                    ->compact(),
            ])->columns(1);
    }
}
