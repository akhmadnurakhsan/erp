<?php

namespace App\Filament\Suser\Resources\TaxClassifications\Pages;

use App\Filament\Suser\Resources\TaxClassifications\TaxClassificationResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateTaxClassification extends CreateRecord
{
    protected static string $resource = TaxClassificationResource::class;

    use CreatePageTrait;
}
