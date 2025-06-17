<?php

namespace App\Filament\Suser\Resources\Kelurahans\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class KelurahanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('kecamatan_id')
                    ->numeric(),
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
