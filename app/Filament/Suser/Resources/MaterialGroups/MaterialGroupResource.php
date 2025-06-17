<?php

namespace App\Filament\Suser\Resources\MaterialGroups;

use App\Filament\Suser\Resources\MaterialGroups\Pages\CreateMaterialGroup;
use App\Filament\Suser\Resources\MaterialGroups\Pages\EditMaterialGroup;
use App\Filament\Suser\Resources\MaterialGroups\Pages\ListMaterialGroups;
use App\Filament\Suser\Resources\MaterialGroups\Pages\ViewMaterialGroup;
use App\Filament\Suser\Resources\MaterialGroups\Schemas\MaterialGroupForm;
use App\Filament\Suser\Resources\MaterialGroups\Schemas\MaterialGroupInfolist;
use App\Filament\Suser\Resources\MaterialGroups\Tables\MaterialGroupsTable;
use App\Models\MaterialGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MaterialGroupResource extends Resource
{
    protected static ?string $model = MaterialGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MaterialGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MaterialGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MaterialGroupsTable::configure($table);
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
            'index' => ListMaterialGroups::route('/'),
            'create' => CreateMaterialGroup::route('/create'),
            'view' => ViewMaterialGroup::route('/{record}'),
            'edit' => EditMaterialGroup::route('/{record}/edit'),
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
