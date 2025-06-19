<?php

namespace App\Filament\Schemas\Tables\Filters;

use Filament\Tables\Filters\QueryBuilder;
use Filament\Tables\Filters\QueryBuilder\Constraints\BooleanConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\DateConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\TextConstraint;

class BasicQueryBuilderFilters
{
    public static function make(): QueryBuilder
    {
        return QueryBuilder::make('Basic Filters')
            ->constraintPickerColumns(1)
            ->constraints([

                TextConstraint::make('name')
                    ->label('Name')
                    ->nullable(),

                TextConstraint::make('description')
                    ->label('Description')
                    ->nullable(),

                BooleanConstraint::make('is_active')
                    ->label('Status')
                    ->icon(false)
                    ->nullable(),

                TextConstraint::make('created_by')
                    ->label('Created by')
                    ->icon(false)
                    ->nullable(),

                TextConstraint::make('updated_by')
                    ->label('Updated by')
                    ->icon(false)
                    ->nullable(),

                DateConstraint::make('created_at')
                    ->icon(false)
                    ->nullable(),

                DateConstraint::make('updated_at')
                    ->icon(false)
                    ->nullable(),

            ]);
    }
}
