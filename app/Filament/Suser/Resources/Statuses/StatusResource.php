<?php

namespace App\Filament\Suser\Resources\Statuses;

use App\Filament\Suser\Resources\Statuses\Pages\CreateStatus;
use App\Filament\Suser\Resources\Statuses\Pages\EditStatus;
use App\Filament\Suser\Resources\Statuses\Pages\ListStatuses;
use App\Filament\Suser\Resources\Statuses\Pages\ViewStatus;
use App\Filament\Suser\Resources\Statuses\Schemas\StatusForm;
use App\Filament\Suser\Resources\Statuses\Schemas\StatusInfolist;
use App\Filament\Suser\Resources\Statuses\Tables\StatusesTable;
use App\Models\Status;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class StatusResource extends Resource
{
    protected static ?string $model = Status::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Status';

    protected static ?string $pluralModelLabel = 'Status';

    protected static ?string $navigationLabel = 'Status';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Configuration';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return StatusForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return StatusInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return StatusesTable::configure($table);
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
            'index' => ListStatuses::route('/'),
            'create' => CreateStatus::route('/create'),
            'view' => ViewStatus::route('/{record}'),
            'edit' => EditStatus::route('/{record}/edit'),
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
