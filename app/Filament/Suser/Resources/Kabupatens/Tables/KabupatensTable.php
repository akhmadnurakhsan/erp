<?php

namespace App\Filament\Suser\Resources\Kabupatens\Tables;

use App\Filament\Schemas\Tables\Columns\LogsColumnGroup;
use App\Filament\Schemas\Tables\Columns\NameColumnGroup;
use App\Filament\Schemas\Tables\Columns\StatusColumnGroup;
use App\Filament\Schemas\Tables\Filters\BasicQueryBuilderFilters;
use App\Filament\Schemas\Tables\recordActions\BasicActionGrouprecordActions;
use App\Filament\Schemas\Tables\toolbarActions\BasicBulkActionGrouptoolbarActions;
use App\Models\Provinsi;
use Filament\Tables\Columns\ColumnGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\QueryBuilder;
use Filament\Tables\Filters\QueryBuilder\Constraints\SelectConstraint;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class KabupatensTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->searchOnBlur()
            ->columns([

                ColumnGroup::make('Provinsi', [

                    TextColumn::make('provinsi.description')
                        ->label('Provinsi')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                ]),

                NameColumnGroup::make(),

                StatusColumnGroup::make(),

                LogsColumnGroup::make(),
            ])
            ->filters([

                TrashedFilter::make(),

                BasicQueryBuilderFilters::make(),

                QueryBuilder::make()
                    ->constraintPickerColumns(1)
                    ->constraints([

                        SelectConstraint::make('provinsi_id')
                            ->label('Provinsi')
                            ->options(Provinsi::all()->pluck('description', 'id'))
                            ->multiple(),

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
