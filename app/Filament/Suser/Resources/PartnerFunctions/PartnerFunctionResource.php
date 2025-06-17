<?php

namespace App\Filament\Suser\Resources\PartnerFunctions;

use App\Filament\Suser\Resources\PartnerFunctions\Pages\CreatePartnerFunction;
use App\Filament\Suser\Resources\PartnerFunctions\Pages\EditPartnerFunction;
use App\Filament\Suser\Resources\PartnerFunctions\Pages\ListPartnerFunctions;
use App\Filament\Suser\Resources\PartnerFunctions\Pages\ViewPartnerFunction;
use App\Filament\Suser\Resources\PartnerFunctions\Schemas\PartnerFunctionForm;
use App\Filament\Suser\Resources\PartnerFunctions\Schemas\PartnerFunctionInfolist;
use App\Filament\Suser\Resources\PartnerFunctions\Tables\PartnerFunctionsTable;
use App\Models\PartnerFunction;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartnerFunctionResource extends Resource
{
    protected static ?string $model = PartnerFunction::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PartnerFunctionForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PartnerFunctionInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartnerFunctionsTable::configure($table);
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
            'index' => ListPartnerFunctions::route('/'),
            'create' => CreatePartnerFunction::route('/create'),
            'view' => ViewPartnerFunction::route('/{record}'),
            'edit' => EditPartnerFunction::route('/{record}/edit'),
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
