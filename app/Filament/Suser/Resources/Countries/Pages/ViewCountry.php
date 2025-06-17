<?php

namespace App\Filament\Suser\Resources\Countries\Pages;

use App\Filament\Suser\Resources\Countries\CountryResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCountry extends ViewRecord
{
    protected static string $resource = CountryResource::class;

    use ViewPageWithDeleteTrait;
}
