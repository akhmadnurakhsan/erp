<?php

namespace App\Filament\Suser\Resources\StatusGroups;

use App\Filament\Suser\Resources\StatusGroups\Pages\CreateStatusGroup;
use App\Filament\Suser\Resources\StatusGroups\Pages\EditStatusGroup;
use App\Filament\Suser\Resources\StatusGroups\Pages\ListStatusGroups;
use App\Filament\Suser\Resources\StatusGroups\Pages\ViewStatusGroup;
use App\Filament\Suser\Resources\StatusGroups\Schemas\StatusGroupForm;
use App\Filament\Suser\Resources\StatusGroups\Schemas\StatusGroupInfolist;
use App\Filament\Suser\Resources\StatusGroups\Tables\StatusGroupsTable;
use App\Models\StatusGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StatusGroupResource extends Resource
{
    protected static ?string $model = StatusGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return StatusGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StatusGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StatusGroupsTable::configure($table);
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
            'index' => ListStatusGroups::route('/'),
            'create' => CreateStatusGroup::route('/create'),
            'view' => ViewStatusGroup::route('/{record}'),
            'edit' => EditStatusGroup::route('/{record}/edit'),
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
