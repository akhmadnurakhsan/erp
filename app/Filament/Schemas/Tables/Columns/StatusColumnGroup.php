<?php

namespace App\Filament\Schemas\Tables\Columns;

use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ColumnGroup;

class StatusColumnGroup
{
    public static function make(): ColumnGroup
    {
        return ColumnGroup::make('Status', [

            CheckboxColumn::make('is_active')
                ->label('Status')
                ->alignCenter()
                ->sortable(),

        ]);
    }
}
