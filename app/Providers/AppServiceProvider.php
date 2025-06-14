<?php

namespace App\Providers;

use Filament\Actions\Action;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Enums\RecordActionsPosition;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Model::unguard();

        // PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch) {
        //     $panelSwitch
        //         ->simple()
        //         ->labels([
        //             'suser' => 'S-User',
        //             'erpadmin' => 'ERP Admin',
        //             'erp' => 'ERP',
        //         ])
        //         ->visible(fn(): bool => auth()->user()->id == 1);
        // });

        Table::configureUsing(function (Table $table): void {
            $table
                ->searchOnBlur()
                // ->headerActions([], position: HeaderActionsPosition::Bottom)
                ->recordActions([], position: RecordActionsPosition::BeforeCells)
                ->filters([], layout: FiltersLayout::AboveContentCollapsible)
                ->deferFilters()
                ->filtersTriggerAction(
                    fn(Action $action) => $action
                        ->button()
                        ->label('Filter'),
                )
                ->emptyStateHeading('Belum ada data')
                ->emptyStateDescription('.')
                ->deferLoading()
                ->extremePaginationLinks();
            // ->bulkActions([
            //     BulkActionGroup::make([
            //         DeleteBulkAction::make(),
            //     ]),

            //     TablesExportBulkAction::make()->exports([
            //         ExcelExport::make('table')->fromTable()
            //             ->withFilename(function ($resource) {

            //                 $now = Carbon::now();

            //                 return $now->year . '.' . str_pad($now->month, 2, '0', STR_PAD_LEFT) . '.' . str_pad($now->day, 2, '0', STR_PAD_LEFT) . ' ' . str_pad($now->hour, 2, '0', STR_PAD_LEFT) . '.' . str_pad($now->minute, 2, '0', STR_PAD_LEFT) . ' ' . $resource::getmodelLabel() . ' Export from Table';
            //             }),
            //         ExcelExport::make('form')->fromForm()
            //             ->withFilename(function ($resource) {

            //                 $now = Carbon::now();

            //                 return $now->year . '.' . str_pad($now->month, 2, '0', STR_PAD_LEFT) . '.' . str_pad($now->day, 2, '0', STR_PAD_LEFT) . ' ' . str_pad($now->hour, 2, '0', STR_PAD_LEFT) . '.' . str_pad($now->minute, 2, '0', STR_PAD_LEFT) . ' ' . $resource::getmodelLabel() . ' Export from Form';
            //             }),
            //         ExcelExport::make('model')->fromModel()
            //             ->withFilename(function ($resource) {

            //                 $now = Carbon::now();

            //                 return $now->year . '.' . str_pad($now->month, 2, '0', STR_PAD_LEFT) . '.' . str_pad($now->day, 2, '0', STR_PAD_LEFT) . ' ' . str_pad($now->hour, 2, '0', STR_PAD_LEFT) . '.' . str_pad($now->minute, 2, '0', STR_PAD_LEFT) . ' ' . $resource::getmodelLabel() . ' Export from Model';
            //             }),
            //     ])
            // ]);
        });
    }
}
