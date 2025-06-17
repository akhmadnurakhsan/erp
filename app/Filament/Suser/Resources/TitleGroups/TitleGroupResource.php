<?php

namespace App\Filament\Suser\Resources\TitleGroups;

use App\Filament\Suser\Resources\TitleGroups\Pages\CreateTitleGroup;
use App\Filament\Suser\Resources\TitleGroups\Pages\EditTitleGroup;
use App\Filament\Suser\Resources\TitleGroups\Pages\ListTitleGroups;
use App\Filament\Suser\Resources\TitleGroups\Pages\ViewTitleGroup;
use App\Filament\Suser\Resources\TitleGroups\Schemas\TitleGroupForm;
use App\Filament\Suser\Resources\TitleGroups\Schemas\TitleGroupInfolist;
use App\Filament\Suser\Resources\TitleGroups\Tables\TitleGroupsTable;
use App\Models\TitleGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TitleGroupResource extends Resource
{
    protected static ?string $model = TitleGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TitleGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TitleGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TitleGroupsTable::configure($table);
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
            'index' => ListTitleGroups::route('/'),
            'create' => CreateTitleGroup::route('/create'),
            'view' => ViewTitleGroup::route('/{record}'),
            'edit' => EditTitleGroup::route('/{record}/edit'),
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
