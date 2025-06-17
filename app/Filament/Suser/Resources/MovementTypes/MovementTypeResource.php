<?php

namespace App\Filament\Suser\Resources\MovementTypes;

use App\Filament\Suser\Resources\MovementTypes\Pages\CreateMovementType;
use App\Filament\Suser\Resources\MovementTypes\Pages\EditMovementType;
use App\Filament\Suser\Resources\MovementTypes\Pages\ListMovementTypes;
use App\Filament\Suser\Resources\MovementTypes\Pages\ViewMovementType;
use App\Filament\Suser\Resources\MovementTypes\Schemas\MovementTypeForm;
use App\Filament\Suser\Resources\MovementTypes\Schemas\MovementTypeInfolist;
use App\Filament\Suser\Resources\MovementTypes\Tables\MovementTypesTable;
use App\Models\MovementType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MovementTypeResource extends Resource
{
    protected static ?string $model = MovementType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MovementTypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MovementTypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MovementTypesTable::configure($table);
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
            'index' => ListMovementTypes::route('/'),
            'create' => CreateMovementType::route('/create'),
            'view' => ViewMovementType::route('/{record}'),
            'edit' => EditMovementType::route('/{record}/edit'),
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
