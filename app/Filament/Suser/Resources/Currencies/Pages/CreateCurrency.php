<?php

namespace App\Filament\Suser\Resources\Currencies\Pages;

use App\Filament\Suser\Resources\Currencies\CurrencyResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateCurrency extends CreateRecord
{
    protected static string $resource = CurrencyResource::class;

    use CreatePageTrait;
}
