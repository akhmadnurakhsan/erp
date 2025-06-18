<?php

namespace App\Filament\Suser\Resources\NrObjects;

use App\Filament\Schemas\BasicForm;
use App\Filament\Suser\Resources\NrObjects\Pages\CreateNrObject;
use App\Filament\Suser\Resources\NrObjects\Pages\EditNrObject;
use App\Filament\Suser\Resources\NrObjects\Pages\ListNrObjects;
use App\Filament\Suser\Resources\NrObjects\Pages\ViewNrObject;
use App\Filament\Suser\Resources\NrObjects\Schemas\NrObjectForm;
use App\Filament\Suser\Resources\NrObjects\Schemas\NrObjectInfolist;
use App\Filament\Suser\Resources\NrObjects\Tables\NrObjectsTable;
use App\Models\NrObject;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class NrObjectResource extends Resource
{
    protected static ?string $model = NrObject::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'NR Object';

    protected static ?string $pluralModelLabel = 'NR Object';

    protected static ?string $navigationLabel = 'NR Object';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Number Range';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return NrObjectForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return NrObjectInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return NrObjectsTable::configure($table);
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
            'index' => ListNrObjects::route('/'),
            'create' => CreateNrObject::route('/create'),
            'view' => ViewNrObject::route('/{record}'),
            'edit' => EditNrObject::route('/{record}/edit'),
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
