<?php

namespace App\Filament\Suser\Resources\NumberRanges\Tables;

use App\Filament\Schemas\Tables\Columns\LogsColumnGroup;
use App\Filament\Schemas\Tables\Columns\NameColumnGroup;
use App\Filament\Schemas\Tables\Columns\StatusColumnGroup;
use App\Filament\Schemas\Tables\Filters\BasicQueryBuilderFilters;
use App\Filament\Schemas\Tables\recordActions\BasicActionGrouprecordActions;
use App\Filament\Schemas\Tables\toolbarActions\BasicBulkActionGrouptoolbarActions;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Filters\QueryBuilder;
use Filament\Tables\Filters\QueryBuilder\Constraints\BooleanConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\TextConstraint;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class NumberRangesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->searchOnBlur()
            ->defaultSort('name', 'asc')
            ->columns([

                ColumnGroup::make('NR Object', [

                    TextColumn::make('nrObject.description')
                        ->label('Nr Object')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),
                ]),

                NameColumnGroup::make(),

                ColumnGroup::make('Year', [

                    TextColumn::make('year')
                        ->label('Year')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                ]),

                ColumnGroup::make('Number Status', [

                    TextColumn::make('number')
                        ->label('Number Range')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextInputColumn::make('current_number')
                        ->label('Current Number')
                        ->rules(['max:10', 'regex:/^[0-9]+$/'])
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                ]),

                ColumnGroup::make('External?', [

                    IconColumn::make('is_external')
                        ->label('External?')
                        ->sortable()
                        ->boolean(),

                ]),

                StatusColumnGroup::make(),

                LogsColumnGroup::make(),

            ])
            ->filters([

                TrashedFilter::make(),

                BasicQueryBuilderFilters::make()
                    ->label('Basic Filters'),

                QueryBuilder::make()
                    ->constraintPickerColumns(1)
                    ->constraints([

                        TextConstraint::make('nrObject.description')
                            ->label('Nr Object')
                            ->nullable(),

                        TextConstraint::make('year')
                            ->label('Year')
                            ->nullable(),

                        TextConstraint::make('number')
                            ->label('Number Range')
                            ->nullable(),

                        TextConstraint::make('current_number')
                            ->label('Current Number')
                            ->nullable(),

                        BooleanConstraint::make('is_external')
                            ->label('External?')
                            ->icon(false)
                            ->nullable(),

                    ]),
            ])
            ->recordActions([
                BasicActionGrouprecordActions::make(),

            ])
            ->toolbarActions([
                BasicBulkActionGrouptoolbarActions::make(),

                // ExportBulkAction::make()
                //     ->label('Export')
                //     ->exporter(UserExporter::class),

            ]);
    }
}
