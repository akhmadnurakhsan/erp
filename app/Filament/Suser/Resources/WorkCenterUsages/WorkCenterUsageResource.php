<?php

namespace App\Filament\Suser\Resources\WorkCenterUsages;

use App\Filament\Suser\Resources\WorkCenterUsages\Pages\CreateWorkCenterUsage;
use App\Filament\Suser\Resources\WorkCenterUsages\Pages\EditWorkCenterUsage;
use App\Filament\Suser\Resources\WorkCenterUsages\Pages\ListWorkCenterUsages;
use App\Filament\Suser\Resources\WorkCenterUsages\Pages\ViewWorkCenterUsage;
use App\Filament\Suser\Resources\WorkCenterUsages\Schemas\WorkCenterUsageForm;
use App\Filament\Suser\Resources\WorkCenterUsages\Schemas\WorkCenterUsageInfolist;
use App\Filament\Suser\Resources\WorkCenterUsages\Tables\WorkCenterUsagesTable;
use App\Models\WorkCenterUsage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkCenterUsageResource extends Resource
{
    protected static ?string $model = WorkCenterUsage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return WorkCenterUsageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return WorkCenterUsageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WorkCenterUsagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWorkCenterUsages::route('/'),
            'create' => CreateWorkCenterUsage::route('/create'),
            'view' => ViewWorkCenterUsage::route('/{record}'),
            'edit' => EditWorkCenterUsage::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
