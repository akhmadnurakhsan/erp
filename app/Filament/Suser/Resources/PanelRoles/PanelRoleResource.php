<?php

namespace App\Filament\Suser\Resources\PanelRoles;

use App\Filament\Suser\Resources\PanelRoles\Pages\CreatePanelRole;
use App\Filament\Suser\Resources\PanelRoles\Pages\EditPanelRole;
use App\Filament\Suser\Resources\PanelRoles\Pages\ListPanelRoles;
use App\Filament\Suser\Resources\PanelRoles\Pages\ViewPanelRole;
use App\Filament\Suser\Resources\PanelRoles\Schemas\PanelRoleForm;
use App\Filament\Suser\Resources\PanelRoles\Schemas\PanelRoleInfolist;
use App\Filament\Suser\Resources\PanelRoles\Tables\PanelRolesTable;
use App\Models\PanelRole;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class PanelRoleResource extends Resource
{
    protected static ?string $model = PanelRole::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Panel Role';

    protected static ?string $pluralModelLabel = 'Panel Role';

    protected static ?string $navigationLabel = 'Panel Role';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Manage Users';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return PanelRoleForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return PanelRoleInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return PanelRolesTable::configure($table);
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
            'index' => ListPanelRoles::route('/'),
            'create' => CreatePanelRole::route('/create'),
            'view' => ViewPanelRole::route('/{record}'),
            'edit' => EditPanelRole::route('/{record}/edit'),
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
