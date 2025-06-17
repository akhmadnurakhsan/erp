<?php

namespace App\Filament\Suser\Resources\BusinessPartnerCategories;

use App\Filament\Suser\Resources\BusinessPartnerCategories\Pages\CreateBusinessPartnerCategory;
use App\Filament\Suser\Resources\BusinessPartnerCategories\Pages\EditBusinessPartnerCategory;
use App\Filament\Suser\Resources\BusinessPartnerCategories\Pages\ListBusinessPartnerCategories;
use App\Filament\Suser\Resources\BusinessPartnerCategories\Pages\ViewBusinessPartnerCategory;
use App\Filament\Suser\Resources\BusinessPartnerCategories\Schemas\BusinessPartnerCategoryForm;
use App\Filament\Suser\Resources\BusinessPartnerCategories\Schemas\BusinessPartnerCategoryInfolist;
use App\Filament\Suser\Resources\BusinessPartnerCategories\Tables\BusinessPartnerCategoriesTable;
use App\Models\BusinessPartnerCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BusinessPartnerCategoryResource extends Resource
{
    protected static ?string $model = BusinessPartnerCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return BusinessPartnerCategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BusinessPartnerCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BusinessPartnerCategoriesTable::configure($table);
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
            'index' => ListBusinessPartnerCategories::route('/'),
            'create' => CreateBusinessPartnerCategory::route('/create'),
            'view' => ViewBusinessPartnerCategory::route('/{record}'),
            'edit' => EditBusinessPartnerCategory::route('/{record}/edit'),
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
