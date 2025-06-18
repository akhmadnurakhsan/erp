<?php

namespace App\Filament\Suser\Resources\Kecamatans;

use App\Filament\Suser\Resources\Kecamatans\Pages\CreateKecamatan;
use App\Filament\Suser\Resources\Kecamatans\Pages\EditKecamatan;
use App\Filament\Suser\Resources\Kecamatans\Pages\ListKecamatans;
use App\Filament\Suser\Resources\Kecamatans\Pages\ViewKecamatan;
use App\Filament\Suser\Resources\Kecamatans\Schemas\KecamatanForm;
use App\Filament\Suser\Resources\Kecamatans\Schemas\KecamatanInfolist;
use App\Filament\Suser\Resources\Kecamatans\Tables\KecamatansTable;
use App\Models\Kecamatan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class KecamatanResource extends Resource
{
    protected static ?string $model = Kecamatan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Kecamatan Data';

    protected static ?string $pluralModelLabel = 'Kecamatan Data';

    protected static ?string $navigationLabel = 'Kecamatan Data';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Geographic Data';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return KecamatanForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return KecamatanInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return KecamatansTable::configure($table);
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
            'index' => ListKecamatans::route('/'),
            'create' => CreateKecamatan::route('/create'),
            'view' => ViewKecamatan::route('/{record}'),
            'edit' => EditKecamatan::route('/{record}/edit'),
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
