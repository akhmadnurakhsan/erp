<?php

namespace App\Filament\Suser\Resources\StorageConditions;

use App\Filament\Suser\Resources\StorageConditions\Pages\CreateStorageCondition;
use App\Filament\Suser\Resources\StorageConditions\Pages\EditStorageCondition;
use App\Filament\Suser\Resources\StorageConditions\Pages\ListStorageConditions;
use App\Filament\Suser\Resources\StorageConditions\Pages\ViewStorageCondition;
use App\Filament\Suser\Resources\StorageConditions\Schemas\StorageConditionForm;
use App\Filament\Suser\Resources\StorageConditions\Schemas\StorageConditionInfolist;
use App\Filament\Suser\Resources\StorageConditions\Tables\StorageConditionsTable;
use App\Models\StorageCondition;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StorageConditionResource extends Resource
{
    protected static ?string $model = StorageCondition::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return StorageConditionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StorageConditionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StorageConditionsTable::configure($table);
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
            'index' => ListStorageConditions::route('/'),
            'create' => CreateStorageCondition::route('/create'),
            'view' => ViewStorageCondition::route('/{record}'),
            'edit' => EditStorageCondition::route('/{record}/edit'),
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
