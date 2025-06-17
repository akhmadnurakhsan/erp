<?php

namespace App\Filament\Suser\Resources\ItemCategoryGroups;

use App\Filament\Suser\Resources\ItemCategoryGroups\Pages\CreateItemCategoryGroup;
use App\Filament\Suser\Resources\ItemCategoryGroups\Pages\EditItemCategoryGroup;
use App\Filament\Suser\Resources\ItemCategoryGroups\Pages\ListItemCategoryGroups;
use App\Filament\Suser\Resources\ItemCategoryGroups\Pages\ViewItemCategoryGroup;
use App\Filament\Suser\Resources\ItemCategoryGroups\Schemas\ItemCategoryGroupForm;
use App\Filament\Suser\Resources\ItemCategoryGroups\Schemas\ItemCategoryGroupInfolist;
use App\Filament\Suser\Resources\ItemCategoryGroups\Tables\ItemCategoryGroupsTable;
use App\Models\ItemCategoryGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemCategoryGroupResource extends Resource
{
    protected static ?string $model = ItemCategoryGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ItemCategoryGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ItemCategoryGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ItemCategoryGroupsTable::configure($table);
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
            'index' => ListItemCategoryGroups::route('/'),
            'create' => CreateItemCategoryGroup::route('/create'),
            'view' => ViewItemCategoryGroup::route('/{record}'),
            'edit' => EditItemCategoryGroup::route('/{record}/edit'),
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
