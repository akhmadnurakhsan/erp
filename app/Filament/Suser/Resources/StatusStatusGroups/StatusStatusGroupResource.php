<?php

namespace App\Filament\Suser\Resources\StatusStatusGroups;

use App\Filament\Suser\Resources\StatusStatusGroups\Pages\CreateStatusStatusGroup;
use App\Filament\Suser\Resources\StatusStatusGroups\Pages\EditStatusStatusGroup;
use App\Filament\Suser\Resources\StatusStatusGroups\Pages\ListStatusStatusGroups;
use App\Filament\Suser\Resources\StatusStatusGroups\Pages\ViewStatusStatusGroup;
use App\Filament\Suser\Resources\StatusStatusGroups\Schemas\StatusStatusGroupForm;
use App\Filament\Suser\Resources\StatusStatusGroups\Schemas\StatusStatusGroupInfolist;
use App\Filament\Suser\Resources\StatusStatusGroups\Tables\StatusStatusGroupsTable;
use App\Models\StatusStatusGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StatusStatusGroupResource extends Resource
{
    protected static ?string $model = StatusStatusGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return StatusStatusGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StatusStatusGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StatusStatusGroupsTable::configure($table);
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
            'index' => ListStatusStatusGroups::route('/'),
            'create' => CreateStatusStatusGroup::route('/create'),
            'view' => ViewStatusStatusGroup::route('/{record}'),
            'edit' => EditStatusStatusGroup::route('/{record}/edit'),
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
