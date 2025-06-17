<?php

namespace App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups;

use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Pages\CreateReversalReasonReversalReasonGroup;
use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Pages\EditReversalReasonReversalReasonGroup;
use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Pages\ListReversalReasonReversalReasonGroups;
use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Pages\ViewReversalReasonReversalReasonGroup;
use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Schemas\ReversalReasonReversalReasonGroupForm;
use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Schemas\ReversalReasonReversalReasonGroupInfolist;
use App\Filament\Suser\Resources\ReversalReasonReversalReasonGroups\Tables\ReversalReasonReversalReasonGroupsTable;
use App\Models\ReversalReasonReversalReasonGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReversalReasonReversalReasonGroupResource extends Resource
{
    protected static ?string $model = ReversalReasonReversalReasonGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ReversalReasonReversalReasonGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ReversalReasonReversalReasonGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReversalReasonReversalReasonGroupsTable::configure($table);
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
            'index' => ListReversalReasonReversalReasonGroups::route('/'),
            'create' => CreateReversalReasonReversalReasonGroup::route('/create'),
            'view' => ViewReversalReasonReversalReasonGroup::route('/{record}'),
            'edit' => EditReversalReasonReversalReasonGroup::route('/{record}/edit'),
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
