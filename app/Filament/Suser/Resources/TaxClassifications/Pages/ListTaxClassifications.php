<?php

namespace App\Filament\Suser\Resources\TaxClassifications\Pages;

use App\Filament\Suser\Resources\TaxClassifications\TaxClassificationResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTaxClassifications extends ListRecords
{
    protected static string $resource = TaxClassificationResource::class;

    use ListPageTrait;
}
