<?php

namespace App\Filament\Suser\Resources\Uoms;

use App\Filament\Suser\Resources\Uoms\Pages\CreateUom;
use App\Filament\Suser\Resources\Uoms\Pages\EditUom;
use App\Filament\Suser\Resources\Uoms\Pages\ListUoms;
use App\Filament\Suser\Resources\Uoms\Pages\ViewUom;
use App\Filament\Suser\Resources\Uoms\Schemas\UomForm;
use App\Filament\Suser\Resources\Uoms\Schemas\UomInfolist;
use App\Filament\Suser\Resources\Uoms\Tables\UomsTable;
use App\Models\Uom;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UomResource extends Resource
{
    protected static ?string $model = Uom::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return UomForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return UomInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UomsTable::configure($table);
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
            'index' => ListUoms::route('/'),
            'create' => CreateUom::route('/create'),
            'view' => ViewUom::route('/{record}'),
            'edit' => EditUom::route('/{record}/edit'),
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
