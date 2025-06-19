<?php

namespace App\Filament\Suser\Resources\Modules;

use App\Filament\Suser\Resources\Modules\Pages\CreateModule;
use App\Filament\Suser\Resources\Modules\Pages\EditModule;
use App\Filament\Suser\Resources\Modules\Pages\ListModules;
use App\Filament\Suser\Resources\Modules\Pages\ViewModule;
use App\Filament\Suser\Resources\Modules\Schemas\ModuleForm;
use App\Filament\Suser\Resources\Modules\Schemas\ModuleInfolist;
use App\Filament\Suser\Resources\Modules\Tables\ModulesTable;
use App\Models\Module;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use UnitEnum;

class ModuleResource extends Resource
{
    protected static ?string $model = Module::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Module';

    protected static ?string $pluralModelLabel = 'Module';

    protected static ?string $navigationLabel = 'Module';

    // protected static ?int $navigationSort = 990000020;

    // protected static ?string $cluster = AdminClustersUser::class;

    protected static string|UnitEnum|null $navigationGroup = 'Configuration';

    // protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $recordTitleAttribute = 'record_title';

    public static function form(Schema $schema): Schema
    {
        return ModuleForm::configure($schema);
    }

    // public static function infolist(Schema $schema): Schema
    // {
    //     return ModuleInfolist::configure($schema);
    // }

    public static function table(Table $table): Table
    {
        return ModulesTable::configure($table);
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
            'index' => ListModules::route('/'),
            'create' => CreateModule::route('/create'),
            'view' => ViewModule::route('/{record}'),
            'edit' => EditModule::route('/{record}/edit'),
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
