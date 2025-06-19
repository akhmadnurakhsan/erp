<?php

namespace App\Filament\Schemas\Tables\Columns;

use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\TextColumn;

class LogsColumnGroup
{
    public static function make(): ColumnGroup
    {
        return ColumnGroup::make('Logs', [

            TextColumn::make('created_by')
                ->label('Created by')
                ->sortable(),

            TextColumn::make('updated_by')
                ->label('Updated by')
                ->sortable(),

            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

        ]);
    }
}
