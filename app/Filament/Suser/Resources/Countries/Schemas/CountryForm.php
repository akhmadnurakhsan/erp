<?php

namespace App\Filament\Suser\Resources\Countries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CountryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('alpha_2'),
                TextInput::make('alpha_3'),
                TextInput::make('country_code'),
                TextInput::make('region'),
                TextInput::make('sub_region'),
                TextInput::make('intermediate_region'),
                TextInput::make('region_code'),
                TextInput::make('sub_region_code'),
                TextInput::make('intermediate_region_code'),
                TextInput::make('ulid'),
                TextInput::make('record_title'),
                TextInput::make('con'),
                Toggle::make('is_active'),
                TextInput::make('created_by'),
                TextInput::make('updated_by'),
            ]);
    }
}
