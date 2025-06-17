<?php

namespace App\Filament\Suser\Resources\FiscalYears;

use App\Filament\Suser\Resources\FiscalYears\Pages\CreateFiscalYear;
use App\Filament\Suser\Resources\FiscalYears\Pages\EditFiscalYear;
use App\Filament\Suser\Resources\FiscalYears\Pages\ListFiscalYears;
use App\Filament\Suser\Resources\FiscalYears\Pages\ViewFiscalYear;
use App\Filament\Suser\Resources\FiscalYears\Schemas\FiscalYearForm;
use App\Filament\Suser\Resources\FiscalYears\Schemas\FiscalYearInfolist;
use App\Filament\Suser\Resources\FiscalYears\Tables\FiscalYearsTable;
use App\Models\FiscalYear;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FiscalYearResource extends Resource
{
    protected static ?string $model = FiscalYear::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return FiscalYearForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FiscalYearInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FiscalYearsTable::configure($table);
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
            'index' => ListFiscalYears::route('/'),
            'create' => CreateFiscalYear::route('/create'),
            'view' => ViewFiscalYear::route('/{record}'),
            'edit' => EditFiscalYear::route('/{record}/edit'),
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
