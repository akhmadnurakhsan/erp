<?php

namespace App\Filament\Suser\Resources\Currencies\Pages;

use App\Filament\Suser\Resources\Currencies\CurrencyResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCurrencies extends ListRecords
{
    protected static string $resource = CurrencyResource::class;

    use ListPageTrait;
}
