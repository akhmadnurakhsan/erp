<?php

namespace App\Filament\Suser\Resources\PartnerFunctionGroups;

use App\Filament\Suser\Resources\PartnerFunctionGroups\Pages\CreatePartnerFunctionGroup;
use App\Filament\Suser\Resources\PartnerFunctionGroups\Pages\EditPartnerFunctionGroup;
use App\Filament\Suser\Resources\PartnerFunctionGroups\Pages\ListPartnerFunctionGroups;
use App\Filament\Suser\Resources\PartnerFunctionGroups\Pages\ViewPartnerFunctionGroup;
use App\Filament\Suser\Resources\PartnerFunctionGroups\Schemas\PartnerFunctionGroupForm;
use App\Filament\Suser\Resources\PartnerFunctionGroups\Schemas\PartnerFunctionGroupInfolist;
use App\Filament\Suser\Resources\PartnerFunctionGroups\Tables\PartnerFunctionGroupsTable;
use App\Models\PartnerFunctionGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartnerFunctionGroupResource extends Resource
{
    protected static ?string $model = PartnerFunctionGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PartnerFunctionGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PartnerFunctionGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartnerFunctionGroupsTable::configure($table);
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
            'index' => ListPartnerFunctionGroups::route('/'),
            'create' => CreatePartnerFunctionGroup::route('/create'),
            'view' => ViewPartnerFunctionGroup::route('/{record}'),
            'edit' => EditPartnerFunctionGroup::route('/{record}/edit'),
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
