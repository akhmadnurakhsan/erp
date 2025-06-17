<?php

namespace App\Filament\Suser\Resources\ReversalReasons;

use App\Filament\Suser\Resources\ReversalReasons\Pages\CreateReversalReason;
use App\Filament\Suser\Resources\ReversalReasons\Pages\EditReversalReason;
use App\Filament\Suser\Resources\ReversalReasons\Pages\ListReversalReasons;
use App\Filament\Suser\Resources\ReversalReasons\Pages\ViewReversalReason;
use App\Filament\Suser\Resources\ReversalReasons\Schemas\ReversalReasonForm;
use App\Filament\Suser\Resources\ReversalReasons\Schemas\ReversalReasonInfolist;
use App\Filament\Suser\Resources\ReversalReasons\Tables\ReversalReasonsTable;
use App\Models\ReversalReason;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReversalReasonResource extends Resource
{
    protected static ?string $model = ReversalReason::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ReversalReasonForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ReversalReasonInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReversalReasonsTable::configure($table);
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
            'index' => ListReversalReasons::route('/'),
            'create' => CreateReversalReason::route('/create'),
            'view' => ViewReversalReason::route('/{record}'),
            'edit' => EditReversalReason::route('/{record}/edit'),
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
