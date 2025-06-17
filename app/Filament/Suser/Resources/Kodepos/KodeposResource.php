<?php

namespace App\Filament\Suser\Resources\Kodepos;

use App\Filament\Suser\Resources\Kodepos\Pages\CreateKodepos;
use App\Filament\Suser\Resources\Kodepos\Pages\EditKodepos;
use App\Filament\Suser\Resources\Kodepos\Pages\ListKodepos;
use App\Filament\Suser\Resources\Kodepos\Pages\ViewKodepos;
use App\Filament\Suser\Resources\Kodepos\Schemas\KodeposForm;
use App\Filament\Suser\Resources\Kodepos\Schemas\KodeposInfolist;
use App\Filament\Suser\Resources\Kodepos\Tables\KodeposTable;
use App\Models\Kodepos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KodeposResource extends Resource
{
    protected static ?string $model = Kodepos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return KodeposForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return KodeposInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KodeposTable::configure($table);
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
            'index' => ListKodepos::route('/'),
            'create' => CreateKodepos::route('/create'),
            'view' => ViewKodepos::route('/{record}'),
            'edit' => EditKodepos::route('/{record}/edit'),
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
