<?php

namespace App\Filament\Suser\Resources\PaymentMethods;

use App\Filament\Suser\Resources\PaymentMethods\Pages\CreatePaymentMethod;
use App\Filament\Suser\Resources\PaymentMethods\Pages\EditPaymentMethod;
use App\Filament\Suser\Resources\PaymentMethods\Pages\ListPaymentMethods;
use App\Filament\Suser\Resources\PaymentMethods\Pages\ViewPaymentMethod;
use App\Filament\Suser\Resources\PaymentMethods\Schemas\PaymentMethodForm;
use App\Filament\Suser\Resources\PaymentMethods\Schemas\PaymentMethodInfolist;
use App\Filament\Suser\Resources\PaymentMethods\Tables\PaymentMethodsTable;
use App\Models\PaymentMethod;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentMethodResource extends Resource
{
    protected static ?string $model = PaymentMethod::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PaymentMethodForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PaymentMethodInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PaymentMethodsTable::configure($table);
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
            'index' => ListPaymentMethods::route('/'),
            'create' => CreatePaymentMethod::route('/create'),
            'view' => ViewPaymentMethod::route('/{record}'),
            'edit' => EditPaymentMethod::route('/{record}/edit'),
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
