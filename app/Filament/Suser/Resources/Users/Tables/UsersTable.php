<?php

namespace App\Filament\Suser\Resources\Users\Tables;

use App\Filament\Schemas\Tables\Filters\BasicQueryBuilderFilters;
use App\Filament\Schemas\Tables\recordActions\BasicActionGrouprecordActions;
use App\Filament\Schemas\Tables\toolbarActions\BasicBulkActionGrouptoolbarActions;
use App\Models\PanelRole;
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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->searchOnBlur()
            ->columns([

                ColumnGroup::make('Nama', [

                    TextColumn::make('name')
                        ->label('Name')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('username')
                        ->label('Username')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                    TextColumn::make('copyable')
                        ->label('User Pass')
                        ->default(function (Model $record) {

                            return (new HtmlString('<div>Bismillah, </br>
                            </br>
                                dev.jhpherbal.com
                            </br>
                            </br>
                            ' . $record->name . '
                            </br>
                                __________</br>
                                Username:</br></br>
                                ' . $record->username . '</br></br>
                                __________</br></br>
                                Password:</br></br>
                                ' . $record->unique . '</div>'));
                        })
                        ->copyable()
                        ->copyableState(function (Model $record) {

                            return (new HtmlString(
                                'Bismillah,

                                dev.jhpherbal.com

                                ' . $record->name . '

                                __________

                                Username:

                                ' . $record->username . '

                                __________

                                Password:

                                ' . $record->unique . ''
                            ));
                        })
                        ->sortable(),

                    TextColumn::make('email')
                        ->label('Email')
                        ->searchable(isIndividual: true, isGlobal: false)
                        ->sortable(),

                ]),

                ColumnGroup::make('Panel', [

                    TextColumn::make('panel_role_id')
                        ->label('Panel')
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

                BasicQueryBuilderFilters::make(),

                QueryBuilder::make()
                    ->constraintPickerColumns(1)
                    ->constraints([

                        TextConstraint::make('username')
                            ->label('Username')
                            ->nullable(),

                        SelectConstraint::make('panel_role_id')
                            ->label('Panel Role')
                            ->options(PanelRole::all()->pluck('description', 'id'))
                            ->multiple(),

                        TextConstraint::make('email')
                            ->label('Email')
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
