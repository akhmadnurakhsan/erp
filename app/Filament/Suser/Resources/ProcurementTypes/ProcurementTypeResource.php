<?php

namespace App\Filament\Suser\Resources\ProcurementTypes;

use App\Filament\Suser\Resources\ProcurementTypes\Pages\CreateProcurementType;
use App\Filament\Suser\Resources\ProcurementTypes\Pages\EditProcurementType;
use App\Filament\Suser\Resources\ProcurementTypes\Pages\ListProcurementTypes;
use App\Filament\Suser\Resources\ProcurementTypes\Pages\ViewProcurementType;
use App\Filament\Suser\Resources\ProcurementTypes\Schemas\ProcurementTypeForm;
use App\Filament\Suser\Resources\ProcurementTypes\Schemas\ProcurementTypeInfolist;
use App\Filament\Suser\Resources\ProcurementTypes\Tables\ProcurementTypesTable;
use App\Models\ProcurementType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProcurementTypeResource extends Resource
{
    protected static ?string $model = ProcurementType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ProcurementTypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProcurementTypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProcurementTypesTable::configure($table);
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
            'index' => ListProcurementTypes::route('/'),
            'create' => CreateProcurementType::route('/create'),
            'view' => ViewProcurementType::route('/{record}'),
            'edit' => EditProcurementType::route('/{record}/edit'),
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
