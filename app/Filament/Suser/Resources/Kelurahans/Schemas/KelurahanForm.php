<?php

namespace App\Filament\Suser\Resources\Kelurahans\Schemas;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class KelurahanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Kelurahan')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                TextInput::make('name')
                                    ->label('Name')
                                    ->required()
                                    ->unique(Kelurahan::class, ignoreRecord: true),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('description')
                                    ->label('Description')
                                    ->required(),
                            ]),

                    ])
                    ->compact(),

                Section::make('Kecamatan')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                Select::make('kecamatan_id')
                                    ->label('Kecamatan')
                                    ->required()
                                    ->native(false)
                                    ->options(Kecamatan::pluck('description', 'id'))
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
