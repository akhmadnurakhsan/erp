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

class StatusResource extends Resource
{
    protected static ?string $model = Status::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return StatusForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StatusInfolist::configure($schema);
    }

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
