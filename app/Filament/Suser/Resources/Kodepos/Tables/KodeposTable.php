<?php

namespace App\Filament\Suser\Resources\Kodepos\Tables;

use App\Filament\Schemas\Tables\Columns\LogsColumnGroup;
use App\Filament\Schemas\Tables\Columns\NameColumnGroup;
use App\Filament\Schemas\Tables\Columns\StatusColumnGroup;
use App\Filament\Schemas\Tables\Filters\BasicQueryBuilderFilters;
use App\Filament\Schemas\Tables\recordActions\BasicActionGrouprecordActions;
use App\Filament\Schemas\Tables\toolbarActions\BasicBulkActionGrouptoolbarActions;
use App\Models\Country;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
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
use Filament\Tables\Filters\QueryBuilder\Constraints\SelectConstraint;
use Filament\Tables\Filters\QueryBuilder\Constraints\TextConstraint;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class KodeposTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->searchOnBlur()
            ->columns([

                NameColumnGroup::make(),

                ColumnGroup::make('Kodepos', [

                    TextColumn::make('kodepos')
                        ->label('Kodepos')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                ]),

                ColumnGroup::make('Data Wilayah', [

                    TextColumn::make('country.description')
                        ->label('Country')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('provinsi.description')
                        ->label('Provinsi')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('kabupaten.description')
                        ->label('Kabupaten')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('kecamatan.description')
                        ->label('Kecamatan')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('kelurahan.description')
                        ->label('Kelurahan')
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

                        TextConstraint::make('kodepos')
                            ->label('Kodepos')
                            ->nullable(),

                        SelectConstraint::make('country_id')
                            ->label('Country')
                            ->options(Country::all()->pluck('description', 'id'))
                            ->multiple(),

                        SelectConstraint::make('provinsi_id')
                            ->label('Provinsi')
                            ->options(Provinsi::all()->pluck('description', 'id'))
                            ->multiple(),

                        SelectConstraint::make('kabupaten_id')
                            ->label('Kabupaten')
                            ->options(Kabupaten::all()->pluck('description', 'id'))
                            ->multiple(),

                        SelectConstraint::make('kecamatan_id')
                            ->label('Kecamatan')
                            ->options(Kecamatan::all()->pluck('description', 'id'))
                            ->multiple(),

                        SelectConstraint::make('kelurahan_id')
                            ->label('Kelurahan')
                            ->options(Kelurahan::all()->pluck('description', 'id'))
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
