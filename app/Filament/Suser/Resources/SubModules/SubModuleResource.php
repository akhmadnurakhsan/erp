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

class SubModuleResource extends Resource
{
    protected static ?string $model = SubModule::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SubModuleForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SubModuleInfolist::configure($schema);
    }

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
