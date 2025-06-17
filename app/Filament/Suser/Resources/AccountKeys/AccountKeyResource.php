<?php

namespace App\Filament\Suser\Resources\AccountKeys;

use App\Filament\Suser\Resources\AccountKeys\Pages\CreateAccountKey;
use App\Filament\Suser\Resources\AccountKeys\Pages\EditAccountKey;
use App\Filament\Suser\Resources\AccountKeys\Pages\ListAccountKeys;
use App\Filament\Suser\Resources\AccountKeys\Pages\ViewAccountKey;
use App\Filament\Suser\Resources\AccountKeys\Schemas\AccountKeyForm;
use App\Filament\Suser\Resources\AccountKeys\Schemas\AccountKeyInfolist;
use App\Filament\Suser\Resources\AccountKeys\Tables\AccountKeysTable;
use App\Models\AccountKey;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AccountKeyResource extends Resource
{
    protected static ?string $model = AccountKey::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AccountKeyForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AccountKeyInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AccountKeysTable::configure($table);
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
            'index' => ListAccountKeys::route('/'),
            'create' => CreateAccountKey::route('/create'),
            'view' => ViewAccountKey::route('/{record}'),
            'edit' => EditAccountKey::route('/{record}/edit'),
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
