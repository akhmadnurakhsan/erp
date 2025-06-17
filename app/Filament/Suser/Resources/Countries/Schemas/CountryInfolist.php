<?php

namespace App\Filament\Suser\Resources\Countries\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CountryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('alpha_2'),
                TextEntry::make('alpha_3'),
                TextEntry::make('country_code'),
                TextEntry::make('region'),
                TextEntry::make('sub_region'),
                TextEntry::make('intermediate_region'),
                TextEntry::make('region_code'),
                TextEntry::make('sub_region_code'),
                TextEntry::make('intermediate_region_code'),
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
