<?php

namespace App\Filament\Suser\Resources\BatchSources;

use App\Filament\Suser\Resources\BatchSources\Pages\CreateBatchSource;
use App\Filament\Suser\Resources\BatchSources\Pages\EditBatchSource;
use App\Filament\Suser\Resources\BatchSources\Pages\ListBatchSources;
use App\Filament\Suser\Resources\BatchSources\Pages\ViewBatchSource;
use App\Filament\Suser\Resources\BatchSources\Schemas\BatchSourceForm;
use App\Filament\Suser\Resources\BatchSources\Schemas\BatchSourceInfolist;
use App\Filament\Suser\Resources\BatchSources\Tables\BatchSourcesTable;
use App\Models\BatchSource;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BatchSourceResource extends Resource
{
    protected static ?string $model = BatchSource::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return BatchSourceForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BatchSourceInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BatchSourcesTable::configure($table);
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
            'index' => ListBatchSources::route('/'),
            'create' => CreateBatchSource::route('/create'),
            'view' => ViewBatchSource::route('/{record}'),
            'edit' => EditBatchSource::route('/{record}/edit'),
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
