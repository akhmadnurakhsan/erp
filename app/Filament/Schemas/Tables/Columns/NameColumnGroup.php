<?php

namespace App\Filament\Schemas\Tables\Columns;

use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\TextColumn;

class NameColumnGroup
{
    public static function make(): ColumnGroup
    {
        return ColumnGroup::make('Name', [

            TextColumn::make('name')
                ->label('Name')
                ->searchable(isIndividual: true, isGlobal: false)
                ->sortable(),

            TextColumn::make('description')
                ->label('Description')
                ->searchable(isIndividual: true, isGlobal: false)
                ->sortable(),

        ]);
    }
}
