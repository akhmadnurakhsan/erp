<?php

namespace App\Filament\Suser\Resources\Currencies\Pages;

use App\Filament\Suser\Resources\Currencies\CurrencyResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCurrency extends ViewRecord
{
    protected static string $resource = CurrencyResource::class;

    use ViewPageWithDeleteTrait;
}
