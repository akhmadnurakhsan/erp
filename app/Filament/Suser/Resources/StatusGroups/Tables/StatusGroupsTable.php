<?php

namespace App\Filament\Suser\Resources\StatusGroups\Tables;

use App\Filament\Schemas\Tables\Columns\LogsColumnGroup;
use App\Filament\Schemas\Tables\Columns\NameColumnGroup;
use App\Filament\Schemas\Tables\Columns\StatusColumnGroup;
use App\Filament\Schemas\Tables\Filters\BasicQueryBuilderFilters;
use App\Filament\Schemas\Tables\recordActions\BasicActionGrouprecordActions;
use App\Filament\Schemas\Tables\toolbarActions\BasicBulkActionGrouptoolbarActions;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class StatusGroupsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->searchOnBlur()
            ->columns([

                NameColumnGroup::make(),

                StatusColumnGroup::make(),

                LogsColumnGroup::make(),
            ])
            ->filters([

                TrashedFilter::make(),

                BasicQueryBuilderFilters::make(),
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
