<?php

namespace App\Filament\Suser\Resources\MaterialPricings\Pages;

use App\Filament\Suser\Resources\MaterialPricings\MaterialPricingResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateMaterialPricing extends CreateRecord
{
    protected static string $resource = MaterialPricingResource::class;

    use CreatePageTrait;
}
