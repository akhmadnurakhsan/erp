<?php

namespace App\Filament\Suser\Resources\TitleTitleGroups;

use App\Filament\Suser\Resources\TitleTitleGroups\Pages\CreateTitleTitleGroup;
use App\Filament\Suser\Resources\TitleTitleGroups\Pages\EditTitleTitleGroup;
use App\Filament\Suser\Resources\TitleTitleGroups\Pages\ListTitleTitleGroups;
use App\Filament\Suser\Resources\TitleTitleGroups\Pages\ViewTitleTitleGroup;
use App\Filament\Suser\Resources\TitleTitleGroups\Schemas\TitleTitleGroupForm;
use App\Filament\Suser\Resources\TitleTitleGroups\Schemas\TitleTitleGroupInfolist;
use App\Filament\Suser\Resources\TitleTitleGroups\Tables\TitleTitleGroupsTable;
use App\Models\TitleTitleGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TitleTitleGroupResource extends Resource
{
    protected static ?string $model = TitleTitleGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TitleTitleGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TitleTitleGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TitleTitleGroupsTable::configure($table);
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
            'index' => ListTitleTitleGroups::route('/'),
            'create' => CreateTitleTitleGroup::route('/create'),
            'view' => ViewTitleTitleGroup::route('/{record}'),
            'edit' => EditTitleTitleGroup::route('/{record}/edit'),
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
