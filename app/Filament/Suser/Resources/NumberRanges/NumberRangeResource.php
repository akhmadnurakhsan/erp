<?php

namespace App\Filament\Suser\Resources\NumberRanges;

use App\Filament\Suser\Resources\NumberRanges\Pages\CreateNumberRange;
use App\Filament\Suser\Resources\NumberRanges\Pages\EditNumberRange;
use App\Filament\Suser\Resources\NumberRanges\Pages\ListNumberRanges;
use App\Filament\Suser\Resources\NumberRanges\Pages\ViewNumberRange;
use App\Filament\Suser\Resources\NumberRanges\Schemas\NumberRangeForm;
use App\Filament\Suser\Resources\NumberRanges\Schemas\NumberRangeInfolist;
use App\Filament\Suser\Resources\NumberRanges\Tables\NumberRangesTable;
use App\Models\NumberRange;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class NumberRangeResource extends Resource
{
    protected static ?string $model = NumberRange::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Number Range';

    protected static ?string $pluralModelLabel = 'Number Range';

    protected static ?string $navigationLabel = 'Number Range';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Number Range';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return NumberRangeForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return NumberRangeInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return NumberRangesTable::configure($table);
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
            'index' => ListNumberRanges::route('/'),
            'create' => CreateNumberRange::route('/create'),
            'view' => ViewNumberRange::route('/{record}'),
            'edit' => EditNumberRange::route('/{record}/edit'),
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
