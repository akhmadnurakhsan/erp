<?php

namespace App\Filament\Suser\Resources\Users\Schemas;

use App\Filament\Schemas\Forms\NameInput;
use App\Filament\Schemas\Forms\StatusInput;
use App\Models\PanelRole;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('User')
                    ->schema([

                        Grid::make(4)
                            ->schema([

                                NameInput::make(),

                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('username')
                                    ->label('Username')
                                    ->required()
                                    ->unique(User::class, ignoreRecord: true),
                            ]),

                        Grid::make(4)
                            ->schema([

                                TextInput::make('email')
                                    ->email()
                                    ->required()
                                    ->label('Email'),
                            ]),

                        Grid::make(1)
                            ->schema([

                                Radio::make('panel_role_id')
                                    ->label('Panel')
                                    ->required()
                                    ->inline()
                                    ->options(PanelRole::where('is_active', true)->pluck('description', 'id')),
                            ]),

                    ])
                    ->compact(),

                Section::make('Password')
                    ->schema([

                        Grid::make(4)
                            ->schema([


                                TextInput::make('unique')
                                    ->label('unique')
                                    ->suffixAction(
                                        Action::make('generatepassword')
                                            ->icon('heroicon-m-arrow-path')
                                            ->action(function (Set $set, $state) {
                                                $set('unique', random_int(10000000, 99999999));
                                            })
                                    )
                                    ->live()
                                    ->afterStateUpdated(function (Set $set, $state) {
                                        $set('password', $state);
                                    }),

                            ]),
                    ])
                    ->compact(),

                // Section::make('Roles')
                //     ->schema([

                //         Grid::make(4)
                //             ->schema([

                //                 Select::make('roles')
                //                     ->relationship('roles', 'name')
                //                     ->multiple()
                //                     ->preload()
                //                     ->searchable(),

                //             ]),
                //     ])
                //     ->compact(),

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
