<?php

namespace App\Filament\Suser\Resources\DebitCredits;

use App\Filament\Suser\Resources\DebitCredits\Pages\CreateDebitCredit;
use App\Filament\Suser\Resources\DebitCredits\Pages\EditDebitCredit;
use App\Filament\Suser\Resources\DebitCredits\Pages\ListDebitCredits;
use App\Filament\Suser\Resources\DebitCredits\Pages\ViewDebitCredit;
use App\Filament\Suser\Resources\DebitCredits\Schemas\DebitCreditForm;
use App\Filament\Suser\Resources\DebitCredits\Schemas\DebitCreditInfolist;
use App\Filament\Suser\Resources\DebitCredits\Tables\DebitCreditsTable;
use App\Models\DebitCredit;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DebitCreditResource extends Resource
{
    protected static ?string $model = DebitCredit::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DebitCreditForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DebitCreditInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DebitCreditsTable::configure($table);
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
            'index' => ListDebitCredits::route('/'),
            'create' => CreateDebitCredit::route('/create'),
            'view' => ViewDebitCredit::route('/{record}'),
            'edit' => EditDebitCredit::route('/{record}/edit'),
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
