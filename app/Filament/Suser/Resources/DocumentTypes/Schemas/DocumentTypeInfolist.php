<?php

namespace App\Filament\Suser\Resources\DocumentTypes\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DocumentTypeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('module_id')
                    ->numeric(),
                TextEntry::make('number_range_id')
                    ->numeric(),
                TextEntry::make('status_group_id')
                    ->numeric(),
                TextEntry::make('reversal_document_type_id')
                    ->numeric(),
                TextEntry::make('reversal_reason_group_id')
                    ->numeric(),
                IconEntry::make('is_matdoc_zero_qty_check')
                    ->boolean(),
                IconEntry::make('is_stock_transfer')
                    ->boolean(),
                TextEntry::make('ulid'),
                TextEntry::make('record_title'),
                TextEntry::make('con'),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_by'),
                TextEntry::make('updated_by'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
                TextEntry::make('deleted_at')
                    ->dateTime(),
            ]);
    }
}
