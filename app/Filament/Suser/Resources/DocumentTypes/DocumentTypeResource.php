<?php

namespace App\Filament\Suser\Resources\DocumentTypes;

use App\Filament\Suser\Resources\DocumentTypes\Pages\CreateDocumentType;
use App\Filament\Suser\Resources\DocumentTypes\Pages\EditDocumentType;
use App\Filament\Suser\Resources\DocumentTypes\Pages\ListDocumentTypes;
use App\Filament\Suser\Resources\DocumentTypes\Pages\ViewDocumentType;
use App\Filament\Suser\Resources\DocumentTypes\Schemas\DocumentTypeForm;
use App\Filament\Suser\Resources\DocumentTypes\Schemas\DocumentTypeInfolist;
use App\Filament\Suser\Resources\DocumentTypes\Tables\DocumentTypesTable;
use App\Models\DocumentType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentTypeResource extends Resource
{
    protected static ?string $model = DocumentType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DocumentTypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DocumentTypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DocumentTypesTable::configure($table);
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
            'index' => ListDocumentTypes::route('/'),
            'create' => CreateDocumentType::route('/create'),
            'view' => ViewDocumentType::route('/{record}'),
            'edit' => EditDocumentType::route('/{record}/edit'),
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
