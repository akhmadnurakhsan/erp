<?php

namespace App\Filament\Suser\Resources\Kelurahans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class KelurahanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('kecamatan_id')
                    ->numeric(),
                TextInput::make('ulid'),
                TextInput::make('record_title'),
                TextInput::make('con'),
                Toggle::make('is_active'),
                TextInput::make('created_by'),
                TextInput::make('updated_by'),
            ]);
    }
}
