<?php

namespace App\Filament\Suser\Resources\ConditionTypes;

use App\Filament\Suser\Resources\ConditionTypes\Pages\CreateConditionType;
use App\Filament\Suser\Resources\ConditionTypes\Pages\EditConditionType;
use App\Filament\Suser\Resources\ConditionTypes\Pages\ListConditionTypes;
use App\Filament\Suser\Resources\ConditionTypes\Pages\ViewConditionType;
use App\Filament\Suser\Resources\ConditionTypes\Schemas\ConditionTypeForm;
use App\Filament\Suser\Resources\ConditionTypes\Schemas\ConditionTypeInfolist;
use App\Filament\Suser\Resources\ConditionTypes\Tables\ConditionTypesTable;
use App\Models\ConditionType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConditionTypeResource extends Resource
{
    protected static ?string $model = ConditionType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ConditionTypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ConditionTypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ConditionTypesTable::configure($table);
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
            'index' => ListConditionTypes::route('/'),
            'create' => CreateConditionType::route('/create'),
            'view' => ViewConditionType::route('/{record}'),
            'edit' => EditConditionType::route('/{record}/edit'),
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
