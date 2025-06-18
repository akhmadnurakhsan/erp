<?php

namespace App\Filament\Suser\Resources\Countries;

use App\Filament\Suser\Resources\Countries\Pages\CreateCountry;
use App\Filament\Suser\Resources\Countries\Pages\EditCountry;
use App\Filament\Suser\Resources\Countries\Pages\ListCountries;
use App\Filament\Suser\Resources\Countries\Pages\ViewCountry;
use App\Filament\Suser\Resources\Countries\Schemas\CountryForm;
use App\Filament\Suser\Resources\Countries\Schemas\CountryInfolist;
use App\Filament\Suser\Resources\Countries\Tables\CountriesTable;
use App\Models\Country;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class CountryResource extends Resource
{
    protected static ?string $model = Country::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Country Data';

    protected static ?string $pluralModelLabel = 'Country Data';

    protected static ?string $navigationLabel = 'Country Data';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Geographic Data';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return CountryForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return CountryInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return CountriesTable::configure($table);
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
            'index' => ListCountries::route('/'),
            'create' => CreateCountry::route('/create'),
            'view' => ViewCountry::route('/{record}'),
            'edit' => EditCountry::route('/{record}/edit'),
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
