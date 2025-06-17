<?php

namespace App\Filament\Suser\Resources\ItemCategories;

use App\Filament\Suser\Resources\ItemCategories\Pages\CreateItemCategory;
use App\Filament\Suser\Resources\ItemCategories\Pages\EditItemCategory;
use App\Filament\Suser\Resources\ItemCategories\Pages\ListItemCategories;
use App\Filament\Suser\Resources\ItemCategories\Pages\ViewItemCategory;
use App\Filament\Suser\Resources\ItemCategories\Schemas\ItemCategoryForm;
use App\Filament\Suser\Resources\ItemCategories\Schemas\ItemCategoryInfolist;
use App\Filament\Suser\Resources\ItemCategories\Tables\ItemCategoriesTable;
use App\Models\ItemCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemCategoryResource extends Resource
{
    protected static ?string $model = ItemCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ItemCategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ItemCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ItemCategoriesTable::configure($table);
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
            'index' => ListItemCategories::route('/'),
            'create' => CreateItemCategory::route('/create'),
            'view' => ViewItemCategory::route('/{record}'),
            'edit' => EditItemCategory::route('/{record}/edit'),
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
