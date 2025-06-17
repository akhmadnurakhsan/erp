<?php

namespace App\Filament\Suser\Resources\DocumentTypes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DocumentTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('module_id')
                    ->numeric(),
                TextInput::make('number_range_id')
                    ->numeric(),
                TextInput::make('status_group_id')
                    ->numeric(),
                TextInput::make('reversal_document_type_id')
                    ->numeric(),
                TextInput::make('reversal_reason_group_id')
                    ->numeric(),
                Toggle::make('is_matdoc_zero_qty_check'),
                Toggle::make('is_stock_transfer'),
                TextInput::make('ulid'),
                TextInput::make('record_title'),
                TextInput::make('con'),
                Toggle::make('is_active'),
                TextInput::make('created_by'),
                TextInput::make('updated_by'),
            ]);
    }
}
