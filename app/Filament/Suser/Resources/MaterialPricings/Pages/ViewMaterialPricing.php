<?php

namespace App\Filament\Suser\Resources\MaterialPricings\Pages;

use App\Filament\Suser\Resources\MaterialPricings\MaterialPricingResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMaterialPricing extends ViewRecord
{
    protected static string $resource = MaterialPricingResource::class;

    use ViewPageWithDeleteTrait;
}
