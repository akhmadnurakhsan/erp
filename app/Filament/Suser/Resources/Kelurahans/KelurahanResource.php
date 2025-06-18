<?php

namespace App\Filament\Suser\Resources\Kelurahans;

use App\Filament\Suser\Resources\Kelurahans\Pages\CreateKelurahan;
use App\Filament\Suser\Resources\Kelurahans\Pages\EditKelurahan;
use App\Filament\Suser\Resources\Kelurahans\Pages\ListKelurahans;
use App\Filament\Suser\Resources\Kelurahans\Pages\ViewKelurahan;
use App\Filament\Suser\Resources\Kelurahans\Schemas\KelurahanForm;
use App\Filament\Suser\Resources\Kelurahans\Schemas\KelurahanInfolist;
use App\Filament\Suser\Resources\Kelurahans\Tables\KelurahansTable;
use App\Models\Kelurahan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class KelurahanResource extends Resource
{
    protected static ?string $model = Kelurahan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Kelurahan Data';

    protected static ?string $pluralModelLabel = 'Kelurahan Data';

    protected static ?string $navigationLabel = 'Kelurahan Data';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Geographic Data';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return KelurahanForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return KelurahanInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return KelurahansTable::configure($table);
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
            'index' => ListKelurahans::route('/'),
            'create' => CreateKelurahan::route('/create'),
            'view' => ViewKelurahan::route('/{record}'),
            'edit' => EditKelurahan::route('/{record}/edit'),
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
