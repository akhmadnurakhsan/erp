<?php

namespace App\Filament\Suser\Resources\Currencies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CurrencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('symbol'),
                TextInput::make('currency_code'),
                TextInput::make('numeric_code'),
                TextInput::make('decimal'),
                TextInput::make('ulid'),
                TextInput::make('record_title'),
                TextInput::make('con'),
                Toggle::make('is_active'),
                TextInput::make('created_by'),
                TextInput::make('updated_by'),
            ]);
    }
}
