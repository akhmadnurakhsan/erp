<?php

namespace App\Filament\Suser\Resources\TransactionTypes;

use App\Filament\Suser\Resources\TransactionTypes\Pages\CreateTransactionType;
use App\Filament\Suser\Resources\TransactionTypes\Pages\EditTransactionType;
use App\Filament\Suser\Resources\TransactionTypes\Pages\ListTransactionTypes;
use App\Filament\Suser\Resources\TransactionTypes\Pages\ViewTransactionType;
use App\Filament\Suser\Resources\TransactionTypes\Schemas\TransactionTypeForm;
use App\Filament\Suser\Resources\TransactionTypes\Schemas\TransactionTypeInfolist;
use App\Filament\Suser\Resources\TransactionTypes\Tables\TransactionTypesTable;
use App\Models\TransactionType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionTypeResource extends Resource
{
    protected static ?string $model = TransactionType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TransactionTypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TransactionTypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TransactionTypesTable::configure($table);
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
            'index' => ListTransactionTypes::route('/'),
            'create' => CreateTransactionType::route('/create'),
            'view' => ViewTransactionType::route('/{record}'),
            'edit' => EditTransactionType::route('/{record}/edit'),
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
