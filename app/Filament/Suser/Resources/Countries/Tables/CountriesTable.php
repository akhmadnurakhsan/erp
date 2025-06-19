<?php

namespace App\Filament\Suser\Resources\Countries\Tables;

use App\Filament\Schemas\Tables\Columns\LogsColumnGroup;
use App\Filament\Schemas\Tables\Columns\NameColumnGroup;
use App\Filament\Schemas\Tables\Columns\StatusColumnGroup;
use App\Filament\Schemas\Tables\Filters\BasicQueryBuilderFilters;
use App\Filament\Schemas\Tables\recordActions\BasicActionGrouprecordActions;
use App\Filament\Schemas\Tables\toolbarActions\BasicBulkActionGrouptoolbarActions;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\QueryBuilder;
use Filament\Tables\Filters\QueryBuilder\Constraints\TextConstraint;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class CountriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->searchOnBlur()
            ->columns([

                NameColumnGroup::make(),

                ColumnGroup::make('Country ISO Data', [

                    TextColumn::make('alpha_2')
                        ->label('Alpha-2 Code')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('alpha_3')
                        ->label('Alpha-3 Code')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('country_code')
                        ->label('Country Code')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('region')
                        ->label('Region')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('sub_region')
                        ->label('Sub Region')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('intermediate_region')
                        ->label('Intermediate Region')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('region_code')
                        ->label('Region Code')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('sub_region_code')
                        ->label('Sub Region Code')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('intermediate_region_code')
                        ->label('Intermediate Region Code')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                ]),

                StatusColumnGroup::make(),

                LogsColumnGroup::make(),
            ])
            ->filters([

                TrashedFilter::make(),

                BasicQueryBuilderFilters::make(),

                QueryBuilder::make()
                    ->constraintPickerColumns(1)
                    ->constraints([

                        TextConstraint::make('alpha_2')
                            ->label('Alpha-2 Code')
                            ->nullable(),

                        TextConstraint::make('alpha_3')
                            ->label('Alpha-3 Code')
                            ->nullable(),

                        TextConstraint::make('country_code')
                            ->label('Country Code')
                            ->nullable(),

                        TextConstraint::make('region')
                            ->label('Region')
                            ->nullable(),

                        TextConstraint::make('sub_region')
                            ->label('Sub Region')
                            ->nullable(),

                        TextConstraint::make('intermediate_region')
                            ->label('Intermediate Region')
                            ->nullable(),

                        TextConstraint::make('region_code')
                            ->label('Region Code')
                            ->nullable(),

                        TextConstraint::make('sub_region_code')
                            ->label('Sub Region Code')
                            ->nullable(),

                        TextConstraint::make('intermediate_region_code')
                            ->label('Intermediate Region Code')
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
