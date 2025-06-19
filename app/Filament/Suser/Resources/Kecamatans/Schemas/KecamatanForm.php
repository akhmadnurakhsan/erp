<?php

namespace App\Filament\Suser\Resources\Kecamatans\Schemas;

use App\Filament\Schemas\Forms\DescriptionInput;
use App\Filament\Schemas\Forms\NameInput;
use App\Filament\Schemas\Forms\StatusInput;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class KecamatanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Kecamatan')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                NameInput::make()
                                    ->unique(Kecamatan::class, ignoreRecord: true),

                            ]),

                        Grid::make(4)
                            ->schema([

                                DescriptionInput::make(),
                            ]),

                    ])
                    ->compact(),

                Section::make('Kabupaten')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                Select::make('kabupaten_id')
                                    ->label('Kabupaten')
                                    ->required()
                                    ->native(false)
                                    ->options(Kabupaten::pluck('description', 'id'))
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
