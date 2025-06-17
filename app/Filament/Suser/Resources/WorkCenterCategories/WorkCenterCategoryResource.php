<?php

namespace App\Filament\Suser\Resources\WorkCenterCategories;

use App\Filament\Suser\Resources\WorkCenterCategories\Pages\CreateWorkCenterCategory;
use App\Filament\Suser\Resources\WorkCenterCategories\Pages\EditWorkCenterCategory;
use App\Filament\Suser\Resources\WorkCenterCategories\Pages\ListWorkCenterCategories;
use App\Filament\Suser\Resources\WorkCenterCategories\Pages\ViewWorkCenterCategory;
use App\Filament\Suser\Resources\WorkCenterCategories\Schemas\WorkCenterCategoryForm;
use App\Filament\Suser\Resources\WorkCenterCategories\Schemas\WorkCenterCategoryInfolist;
use App\Filament\Suser\Resources\WorkCenterCategories\Tables\WorkCenterCategoriesTable;
use App\Models\WorkCenterCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkCenterCategoryResource extends Resource
{
    protected static ?string $model = WorkCenterCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return WorkCenterCategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return WorkCenterCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WorkCenterCategoriesTable::configure($table);
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
            'index' => ListWorkCenterCategories::route('/'),
            'create' => CreateWorkCenterCategory::route('/create'),
            'view' => ViewWorkCenterCategory::route('/{record}'),
            'edit' => EditWorkCenterCategory::route('/{record}/edit'),
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
