<?php

namespace App\Filament\Suser\Resources\IndustrySectors;

use App\Filament\Suser\Resources\IndustrySectors\Pages\CreateIndustrySector;
use App\Filament\Suser\Resources\IndustrySectors\Pages\EditIndustrySector;
use App\Filament\Suser\Resources\IndustrySectors\Pages\ListIndustrySectors;
use App\Filament\Suser\Resources\IndustrySectors\Pages\ViewIndustrySector;
use App\Filament\Suser\Resources\IndustrySectors\Schemas\IndustrySectorForm;
use App\Filament\Suser\Resources\IndustrySectors\Schemas\IndustrySectorInfolist;
use App\Filament\Suser\Resources\IndustrySectors\Tables\IndustrySectorsTable;
use App\Models\IndustrySector;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IndustrySectorResource extends Resource
{
    protected static ?string $model = IndustrySector::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return IndustrySectorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return IndustrySectorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IndustrySectorsTable::configure($table);
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
            'index' => ListIndustrySectors::route('/'),
            'create' => CreateIndustrySector::route('/create'),
            'view' => ViewIndustrySector::route('/{record}'),
            'edit' => EditIndustrySector::route('/{record}/edit'),
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
