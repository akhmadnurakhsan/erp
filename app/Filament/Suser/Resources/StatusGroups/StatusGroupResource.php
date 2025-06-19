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
use UnitEnum;

class StatusGroupResource extends Resource
{
    protected static ?string $model = StatusGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Status Group';

    protected static ?string $pluralModelLabel = 'Status Group';

    protected static ?string $navigationLabel = 'Status Group';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Configuration';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return StatusGroupForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return StatusGroupInfolist::configure($schema);
    // }

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
