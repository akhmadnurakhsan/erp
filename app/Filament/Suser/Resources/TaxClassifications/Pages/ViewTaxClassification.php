<?php

namespace App\Filament\Suser\Resources\TaxClassifications\Pages;

use App\Filament\Suser\Resources\TaxClassifications\TaxClassificationResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTaxClassification extends ViewRecord
{
    protected static string $resource = TaxClassificationResource::class;

    use ViewPageWithDeleteTrait;
}
