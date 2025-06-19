<?php

namespace App\Filament\Suser\Resources\SubModules;

use App\Filament\Suser\Resources\SubModules\Pages\CreateSubModule;
use App\Filament\Suser\Resources\SubModules\Pages\EditSubModule;
use App\Filament\Suser\Resources\SubModules\Pages\ListSubModules;
use App\Filament\Suser\Resources\SubModules\Pages\ViewSubModule;
use App\Filament\Suser\Resources\SubModules\Schemas\SubModuleForm;
use App\Filament\Suser\Resources\SubModules\Schemas\SubModuleInfolist;
use App\Filament\Suser\Resources\SubModules\Tables\SubModulesTable;
use App\Models\SubModule;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class SubModuleResource extends Resource
{
    protected static ?string $model = SubModule::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Sub Module';

    protected static ?string $pluralModelLabel = 'Sub Module';

    protected static ?string $navigationLabel = 'Sub Module';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Configuration';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return SubModuleForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return SubModuleInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return SubModulesTable::configure($table);
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
            'index' => ListSubModules::route('/'),
            'create' => CreateSubModule::route('/create'),
            'view' => ViewSubModule::route('/{record}'),
            'edit' => EditSubModule::route('/{record}/edit'),
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
