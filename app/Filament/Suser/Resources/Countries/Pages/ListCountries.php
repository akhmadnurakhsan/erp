<?php

namespace App\Filament\Suser\Resources\Countries\Pages;

use App\Filament\Imports\CountryImporter;
use App\Filament\Suser\Resources\Countries\CountryResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;

class ListCountries extends ListRecords
{
    protected static string $resource = CountryResource::class;

    use ListPageTrait;
}
