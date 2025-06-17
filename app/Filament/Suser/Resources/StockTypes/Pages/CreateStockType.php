<?php

namespace App\Filament\Suser\Resources\StockTypes\Pages;

use App\Filament\Suser\Resources\StockTypes\StockTypeResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateStockType extends CreateRecord
{
    protected static string $resource = StockTypeResource::class;

    use CreatePageTrait;
}
