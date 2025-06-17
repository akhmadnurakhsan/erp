<?php

namespace App\Filament\Suser\Resources\TemperatureConditions;

use App\Filament\Suser\Resources\TemperatureConditions\Pages\CreateTemperatureCondition;
use App\Filament\Suser\Resources\TemperatureConditions\Pages\EditTemperatureCondition;
use App\Filament\Suser\Resources\TemperatureConditions\Pages\ListTemperatureConditions;
use App\Filament\Suser\Resources\TemperatureConditions\Pages\ViewTemperatureCondition;
use App\Filament\Suser\Resources\TemperatureConditions\Schemas\TemperatureConditionForm;
use App\Filament\Suser\Resources\TemperatureConditions\Schemas\TemperatureConditionInfolist;
use App\Filament\Suser\Resources\TemperatureConditions\Tables\TemperatureConditionsTable;
use App\Models\TemperatureCondition;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TemperatureConditionResource extends Resource
{
    protected static ?string $model = TemperatureCondition::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TemperatureConditionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TemperatureConditionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TemperatureConditionsTable::configure($table);
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
            'index' => ListTemperatureConditions::route('/'),
            'create' => CreateTemperatureCondition::route('/create'),
            'view' => ViewTemperatureCondition::route('/{record}'),
            'edit' => EditTemperatureCondition::route('/{record}/edit'),
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
