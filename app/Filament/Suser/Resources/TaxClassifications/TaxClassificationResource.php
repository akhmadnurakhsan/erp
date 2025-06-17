<?php

namespace App\Filament\Suser\Resources\TaxClassifications;

use App\Filament\Suser\Resources\TaxClassifications\Pages\CreateTaxClassification;
use App\Filament\Suser\Resources\TaxClassifications\Pages\EditTaxClassification;
use App\Filament\Suser\Resources\TaxClassifications\Pages\ListTaxClassifications;
use App\Filament\Suser\Resources\TaxClassifications\Pages\ViewTaxClassification;
use App\Filament\Suser\Resources\TaxClassifications\Schemas\TaxClassificationForm;
use App\Filament\Suser\Resources\TaxClassifications\Schemas\TaxClassificationInfolist;
use App\Filament\Suser\Resources\TaxClassifications\Tables\TaxClassificationsTable;
use App\Models\TaxClassification;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TaxClassificationResource extends Resource
{
    protected static ?string $model = TaxClassification::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return TaxClassificationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TaxClassificationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TaxClassificationsTable::configure($table);
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
            'index' => ListTaxClassifications::route('/'),
            'create' => CreateTaxClassification::route('/create'),
            'view' => ViewTaxClassification::route('/{record}'),
            'edit' => EditTaxClassification::route('/{record}/edit'),
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
