<?php

namespace App\Filament\Suser\Resources\Provinsis;

use App\Filament\Suser\Resources\Provinsis\Pages\CreateProvinsi;
use App\Filament\Suser\Resources\Provinsis\Pages\EditProvinsi;
use App\Filament\Suser\Resources\Provinsis\Pages\ListProvinsis;
use App\Filament\Suser\Resources\Provinsis\Pages\ViewProvinsi;
use App\Filament\Suser\Resources\Provinsis\Schemas\ProvinsiForm;
use App\Filament\Suser\Resources\Provinsis\Schemas\ProvinsiInfolist;
use App\Filament\Suser\Resources\Provinsis\Tables\ProvinsisTable;
use App\Models\Provinsi;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class ProvinsiResource extends Resource
{
    protected static ?string $model = Provinsi::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Provinsi Data';

    protected static ?string $pluralModelLabel = 'Provinsi Data';

    protected static ?string $navigationLabel = 'Provinsi Data';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Geographic Data';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return ProvinsiForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return ProvinsiInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return ProvinsisTable::configure($table);
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
            'index' => ListProvinsis::route('/'),
            'create' => CreateProvinsi::route('/create'),
            'view' => ViewProvinsi::route('/{record}'),
            'edit' => EditProvinsi::route('/{record}/edit'),
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
