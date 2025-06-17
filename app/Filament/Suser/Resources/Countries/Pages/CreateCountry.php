<?php

namespace App\Filament\Suser\Resources\Countries\Pages;

use App\Filament\Suser\Resources\Countries\CountryResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateCountry extends CreateRecord
{
    protected static string $resource = CountryResource::class;

    use CreatePageTrait;
}
