<?php

namespace App\Filament\Suser\Resources\Kabupatens;

use App\Filament\Suser\Resources\Kabupatens\Pages\CreateKabupaten;
use App\Filament\Suser\Resources\Kabupatens\Pages\EditKabupaten;
use App\Filament\Suser\Resources\Kabupatens\Pages\ListKabupatens;
use App\Filament\Suser\Resources\Kabupatens\Pages\ViewKabupaten;
use App\Filament\Suser\Resources\Kabupatens\Schemas\KabupatenForm;
use App\Filament\Suser\Resources\Kabupatens\Schemas\KabupatenInfolist;
use App\Filament\Suser\Resources\Kabupatens\Tables\KabupatensTable;
use App\Models\Kabupaten;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class KabupatenResource extends Resource
{
    protected static ?string $model = Kabupaten::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Kabupaten Data';

    protected static ?string $pluralModelLabel = 'Kabupaten Data';

    protected static ?string $navigationLabel = 'Kabupaten Data';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Geographic Data';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return KabupatenForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return KabupatenInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return KabupatensTable::configure($table);
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
            'index' => ListKabupatens::route('/'),
            'create' => CreateKabupaten::route('/create'),
            'view' => ViewKabupaten::route('/{record}'),
            'edit' => EditKabupaten::route('/{record}/edit'),
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
