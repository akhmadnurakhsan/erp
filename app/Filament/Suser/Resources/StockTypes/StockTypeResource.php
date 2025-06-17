<?php

namespace App\Filament\Suser\Resources\StockTypes;

use App\Filament\Suser\Resources\StockTypes\Pages\CreateStockType;
use App\Filament\Suser\Resources\StockTypes\Pages\EditStockType;
use App\Filament\Suser\Resources\StockTypes\Pages\ListStockTypes;
use App\Filament\Suser\Resources\StockTypes\Pages\ViewStockType;
use App\Filament\Suser\Resources\StockTypes\Schemas\StockTypeForm;
use App\Filament\Suser\Resources\StockTypes\Schemas\StockTypeInfolist;
use App\Filament\Suser\Resources\StockTypes\Tables\StockTypesTable;
use App\Models\StockType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StockTypeResource extends Resource
{
    protected static ?string $model = StockType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return StockTypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StockTypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StockTypesTable::configure($table);
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
            'index' => ListStockTypes::route('/'),
            'create' => CreateStockType::route('/create'),
            'view' => ViewStockType::route('/{record}'),
            'edit' => EditStockType::route('/{record}/edit'),
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
