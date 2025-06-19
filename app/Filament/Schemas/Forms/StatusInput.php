<?php

namespace App\Filament\Schemas\Forms;

use Filament\Forms\Components\Radio;

class StatusInput
{
    public static function make(): Radio
    {
        return Radio::make('is_active')
            ->label('Active?')
            ->boolean()
            ->inline()
            ->default(true);
    }
}
