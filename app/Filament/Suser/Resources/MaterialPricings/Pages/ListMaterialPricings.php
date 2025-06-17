<?php

namespace App\Filament\Suser\Resources\MaterialPricings\Pages;

use App\Filament\Suser\Resources\MaterialPricings\MaterialPricingResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMaterialPricings extends ListRecords
{
    protected static string $resource = MaterialPricingResource::class;

    use ListPageTrait;
}
