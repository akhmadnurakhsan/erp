<?php

namespace App\Filament\Suser\Resources\TransactionReferences;

use App\Filament\Suser\Resources\TransactionReferences\Pages\CreateTransactionReference;
use App\Filament\Suser\Resources\TransactionReferences\Pages\EditTransactionReference;
use App\Filament\Suser\Resources\TransactionReferences\Pages\ListTransactionReferences;
use App\Filament\Suser\Resources\TransactionReferences\Pages\ViewTransactionReference;
use App\Filament\Suser\Resources\TransactionReferences\Schemas\TransactionReferenceForm;
use App\Filament\Suser\Resources\TransactionReferences\Schemas\TransactionReferenceInfolist;
use App\Filament\Suser\Resources\TransactionReferences\Tables\TransactionReferencesTable;
use App\Models\TransactionReference;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionReferenceResource extends Resource
{
    protected static ?string $model = TransactionReference::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TransactionReferenceForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TransactionReferenceInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TransactionReferencesTable::configure($table);
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
            'index' => ListTransactionReferences::route('/'),
            'create' => CreateTransactionReference::route('/create'),
            'view' => ViewTransactionReference::route('/{record}'),
            'edit' => EditTransactionReference::route('/{record}/edit'),
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
