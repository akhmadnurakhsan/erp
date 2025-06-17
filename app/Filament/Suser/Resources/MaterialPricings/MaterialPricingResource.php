<?php

namespace App\Filament\Suser\Resources\MaterialPricings;

use App\Filament\Suser\Resources\MaterialPricings\Pages\CreateMaterialPricing;
use App\Filament\Suser\Resources\MaterialPricings\Pages\EditMaterialPricing;
use App\Filament\Suser\Resources\MaterialPricings\Pages\ListMaterialPricings;
use App\Filament\Suser\Resources\MaterialPricings\Pages\ViewMaterialPricing;
use App\Filament\Suser\Resources\MaterialPricings\Schemas\MaterialPricingForm;
use App\Filament\Suser\Resources\MaterialPricings\Schemas\MaterialPricingInfolist;
use App\Filament\Suser\Resources\MaterialPricings\Tables\MaterialPricingsTable;
use App\Models\MaterialPricing;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MaterialPricingResource extends Resource
{
    protected static ?string $model = MaterialPricing::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MaterialPricingForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MaterialPricingInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MaterialPricingsTable::configure($table);
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
            'index' => ListMaterialPricings::route('/'),
            'create' => CreateMaterialPricing::route('/create'),
            'view' => ViewMaterialPricing::route('/{record}'),
            'edit' => EditMaterialPricing::route('/{record}/edit'),
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
