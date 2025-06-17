<?php

namespace App\Filament\Suser\Resources\ReversalReasonGroups;

use App\Filament\Suser\Resources\ReversalReasonGroups\Pages\CreateReversalReasonGroup;
use App\Filament\Suser\Resources\ReversalReasonGroups\Pages\EditReversalReasonGroup;
use App\Filament\Suser\Resources\ReversalReasonGroups\Pages\ListReversalReasonGroups;
use App\Filament\Suser\Resources\ReversalReasonGroups\Pages\ViewReversalReasonGroup;
use App\Filament\Suser\Resources\ReversalReasonGroups\Schemas\ReversalReasonGroupForm;
use App\Filament\Suser\Resources\ReversalReasonGroups\Schemas\ReversalReasonGroupInfolist;
use App\Filament\Suser\Resources\ReversalReasonGroups\Tables\ReversalReasonGroupsTable;
use App\Models\ReversalReasonGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReversalReasonGroupResource extends Resource
{
    protected static ?string $model = ReversalReasonGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ReversalReasonGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ReversalReasonGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReversalReasonGroupsTable::configure($table);
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
            'index' => ListReversalReasonGroups::route('/'),
            'create' => CreateReversalReasonGroup::route('/create'),
            'view' => ViewReversalReasonGroup::route('/{record}'),
            'edit' => EditReversalReasonGroup::route('/{record}/edit'),
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
