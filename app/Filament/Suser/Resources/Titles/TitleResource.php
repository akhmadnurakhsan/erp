<?php

namespace App\Filament\Suser\Resources\Titles;

use App\Filament\Suser\Resources\Titles\Pages\CreateTitle;
use App\Filament\Suser\Resources\Titles\Pages\EditTitle;
use App\Filament\Suser\Resources\Titles\Pages\ListTitles;
use App\Filament\Suser\Resources\Titles\Pages\ViewTitle;
use App\Filament\Suser\Resources\Titles\Schemas\TitleForm;
use App\Filament\Suser\Resources\Titles\Schemas\TitleInfolist;
use App\Filament\Suser\Resources\Titles\Tables\TitlesTable;
use App\Models\Title;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TitleResource extends Resource
{
    protected static ?string $model = Title::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TitleForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TitleInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TitlesTable::configure($table);
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
            'index' => ListTitles::route('/'),
            'create' => CreateTitle::route('/create'),
            'view' => ViewTitle::route('/{record}'),
            'edit' => EditTitle::route('/{record}/edit'),
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
