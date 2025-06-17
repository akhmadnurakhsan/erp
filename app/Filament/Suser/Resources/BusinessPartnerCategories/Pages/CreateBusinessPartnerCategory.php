<?php

namespace App\Filament\Suser\Resources\BusinessPartnerCategories\Pages;

use App\Filament\Suser\Resources\BusinessPartnerCategories\BusinessPartnerCategoryResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateBusinessPartnerCategory extends CreateRecord
{
    protected static string $resource = BusinessPartnerCategoryResource::class;

    use CreatePageTrait;
}
