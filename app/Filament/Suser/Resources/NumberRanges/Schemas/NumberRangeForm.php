<?php

namespace App\Filament\Suser\Resources\NumberRanges\Schemas;

use App\Filament\Suser\Resources\NrObjects\Tables\NrObjectsTable;
use App\Models\NrObject;
use App\Models\NumberRange;
use Filament\Actions\Action;
use Filament\Forms\Components\ModalTableSelect;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class NumberRangeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('NR Object')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                ModalTableSelect::make('nr_object_id')
                                    ->relationship('nrObject', 'description')
                                    ->tableConfiguration(NrObjectsTable::class)
                                    ->required()
                                    ->selectAction(
                                        fn(Action $action) => $action
                                            ->label('Select NR Object')
                                            ->icon(Heroicon::MagnifyingGlass)
                                            ->button()
                                            ->outlined()
                                            ->modalHeading('Search NR Objects'),
                                    ),

                            ]),

                    ])
                    ->compact(),

                Section::make('Name')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                TextInput::make('name')
                                    ->label('Name')
                                    ->required()
                                    ->unique(NumberRange::class, ignoreRecord: true),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('description')
                                    ->label('Description')
                                    ->required(),
                            ]),

                    ])
                    ->compact(),

                Section::make('Number Range')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                Radio::make('is_external')
                                    ->label('External?')
                                    ->boolean()
                                    ->inline()
                                    ->live()
                                    ->required(),

                            ]),

                        Grid::make(4)
                            ->hidden(fn(Get $get) => $get('is_external') == true)
                            ->schema([

                                TextInput::make('year')
                                    ->label('Year')
                                    ->numeric()
                                    ->maxLength(4),

                            ]),

                        Grid::make(4)
                            ->hidden(fn(Get $get) => $get('is_external') == true)
                            ->schema([

                                TextInput::make('number')
                                    ->label('Number Range')
                                    ->regex('/[^0-9]/') // Allow only numbers
                                    ->required()
                                    ->maxLength(10),

                            ]),

                        Grid::make(4)
                            ->hidden(fn(Get $get) => $get('is_external') == true)
                            ->schema([

                                TextInput::make('current_number')
                                    ->label('Current Number')
                                    ->regex('/[^0-9]/') // Allow only numbers
                                    ->required()
                                    ->maxLength(10),

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
