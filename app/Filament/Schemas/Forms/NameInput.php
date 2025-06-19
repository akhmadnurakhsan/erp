<?php

namespace App\Filament\Schemas\Forms;

use Filament\Forms\Components\TextInput;

class NameInput
{
    public static function make(): TextInput
    {
        return TextInput::make('name')
            ->label('Name')
            ->required();
    }
}
