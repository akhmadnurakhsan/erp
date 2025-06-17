<?php

namespace App\Filament\Suser\Resources\StockTypes\Pages;

use App\Filament\Suser\Resources\StockTypes\StockTypeResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStockType extends ViewRecord
{
    protected static string $resource = StockTypeResource::class;

    use ViewPageWithDeleteTrait;
}
