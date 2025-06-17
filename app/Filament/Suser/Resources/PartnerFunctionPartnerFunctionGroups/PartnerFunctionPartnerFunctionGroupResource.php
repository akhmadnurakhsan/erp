<?php

namespace App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups;

use App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\Pages\CreatePartnerFunctionPartnerFunctionGroup;
use App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\Pages\EditPartnerFunctionPartnerFunctionGroup;
use App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\Pages\ListPartnerFunctionPartnerFunctionGroups;
use App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\Pages\ViewPartnerFunctionPartnerFunctionGroup;
use App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\Schemas\PartnerFunctionPartnerFunctionGroupForm;
use App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\Schemas\PartnerFunctionPartnerFunctionGroupInfolist;
use App\Filament\Suser\Resources\PartnerFunctionPartnerFunctionGroups\Tables\PartnerFunctionPartnerFunctionGroupsTable;
use App\Models\PartnerFunctionPartnerFunctionGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartnerFunctionPartnerFunctionGroupResource extends Resource
{
    protected static ?string $model = PartnerFunctionPartnerFunctionGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PartnerFunctionPartnerFunctionGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PartnerFunctionPartnerFunctionGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartnerFunctionPartnerFunctionGroupsTable::configure($table);
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
            'index' => ListPartnerFunctionPartnerFunctionGroups::route('/'),
            'create' => CreatePartnerFunctionPartnerFunctionGroup::route('/create'),
            'view' => ViewPartnerFunctionPartnerFunctionGroup::route('/{record}'),
            'edit' => EditPartnerFunctionPartnerFunctionGroup::route('/{record}/edit'),
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
