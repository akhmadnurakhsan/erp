<?php

namespace App\Filament\Suser\Resources\BusinessPartnerRoles;

use App\Filament\Suser\Resources\BusinessPartnerRoles\Pages\CreateBusinessPartnerRole;
use App\Filament\Suser\Resources\BusinessPartnerRoles\Pages\EditBusinessPartnerRole;
use App\Filament\Suser\Resources\BusinessPartnerRoles\Pages\ListBusinessPartnerRoles;
use App\Filament\Suser\Resources\BusinessPartnerRoles\Pages\ViewBusinessPartnerRole;
use App\Filament\Suser\Resources\BusinessPartnerRoles\Schemas\BusinessPartnerRoleForm;
use App\Filament\Suser\Resources\BusinessPartnerRoles\Schemas\BusinessPartnerRoleInfolist;
use App\Filament\Suser\Resources\BusinessPartnerRoles\Tables\BusinessPartnerRolesTable;
use App\Models\BusinessPartnerRole;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BusinessPartnerRoleResource extends Resource
{
    protected static ?string $model = BusinessPartnerRole::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return BusinessPartnerRoleForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BusinessPartnerRoleInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BusinessPartnerRolesTable::configure($table);
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
            'index' => ListBusinessPartnerRoles::route('/'),
            'create' => CreateBusinessPartnerRole::route('/create'),
            'view' => ViewBusinessPartnerRole::route('/{record}'),
            'edit' => EditBusinessPartnerRole::route('/{record}/edit'),
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
