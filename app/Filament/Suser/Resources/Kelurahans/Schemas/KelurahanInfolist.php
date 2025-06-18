<?php

namespace App\Filament\Suser\Resources\Kelurahans\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class KelurahanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Kelurahan')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                TextEntry::make('name')
                                    ->label('Name'),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextEntry::make('description')
                                    ->label('Description'),
                            ]),

                    ])
                    ->compact(),

                Section::make('Kecamatan')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                TextEntry::make('kecamatan.description')
                                    ->label('Kecamatan'),

                            ]),

                    ])
                    ->compact(),

                Section::make('Status')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                IconEntry::make('is_active')
                                    ->label('Active?')
                                    ->boolean(),

                            ]),
                    ])->collapsible()
                    ->compact(),
            ])->columns(1);
    }
}
