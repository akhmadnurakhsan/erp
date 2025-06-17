<?php

namespace App\Filament\Suser\Resources\MaterialTypes;

use App\Filament\Suser\Resources\MaterialTypes\Pages\CreateMaterialType;
use App\Filament\Suser\Resources\MaterialTypes\Pages\EditMaterialType;
use App\Filament\Suser\Resources\MaterialTypes\Pages\ListMaterialTypes;
use App\Filament\Suser\Resources\MaterialTypes\Pages\ViewMaterialType;
use App\Filament\Suser\Resources\MaterialTypes\Schemas\MaterialTypeForm;
use App\Filament\Suser\Resources\MaterialTypes\Schemas\MaterialTypeInfolist;
use App\Filament\Suser\Resources\MaterialTypes\Tables\MaterialTypesTable;
use App\Models\MaterialType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MaterialTypeResource extends Resource
{
    protected static ?string $model = MaterialType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MaterialTypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MaterialTypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MaterialTypesTable::configure($table);
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
            'index' => ListMaterialTypes::route('/'),
            'create' => CreateMaterialType::route('/create'),
            'view' => ViewMaterialType::route('/{record}'),
            'edit' => EditMaterialType::route('/{record}/edit'),
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
