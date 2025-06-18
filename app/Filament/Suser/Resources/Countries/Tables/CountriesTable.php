<?php

namespace App\Filament\Suser\Resources\Countries\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\QueryBuilder;
use Filament\Tables\Filters\QueryBuilder\Constraints\BooleanConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\DateConstraint;
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

                ColumnGroup::make('Name', [

                    TextColumn::make('name')
                        ->label('Name')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('description')
                        ->label('Description')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                ]),

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

                ColumnGroup::make('Status', [

                    CheckboxColumn::make('is_active')
                        ->label('Status')
                        ->alignCenter()
                        ->sortable(),

                ]),

                ColumnGroup::make('Logs', [

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

                ]),
            ])
            ->filters([

                TrashedFilter::make(),

                QueryBuilder::make()
                    ->constraintPickerColumns(1)
                    ->constraints([

                        TextConstraint::make('name')
                            ->label('Name')
                            ->nullable(),

                        TextConstraint::make('description')
                            ->label('Description')
                            ->nullable(),

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

                    ]),
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                    ForceDeleteAction::make(),
                    RestoreAction::make(),
                ]),

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),

                // ExportBulkAction::make()
                //     ->label('Export')
                //     ->exporter(UserExporter::class),

            ]);
    }
}
