<?php

namespace App\Filament\Suser\Resources\StockTypes\Pages;

use App\Filament\Suser\Resources\StockTypes\StockTypeResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStockTypes extends ListRecords
{
    protected static string $resource = StockTypeResource::class;

    use ListPageTrait;
}
