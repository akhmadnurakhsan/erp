<?php

namespace App\Filament\Schemas\Forms;

use Filament\Forms\Components\TextInput;

class DescriptionInput
{
    public static function make(): TextInput
    {
        return TextInput::make('description')
            ->label('Description')
            ->required();
    }
}
