<?php

namespace App\Filament\Suser\Resources\Countries\Pages;

use App\Filament\Suser\Resources\Countries\CountryResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCountries extends ListRecords
{
    protected static string $resource = CountryResource::class;

    use ListPageTrait;
}
