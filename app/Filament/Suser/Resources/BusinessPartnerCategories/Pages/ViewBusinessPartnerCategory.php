<?php

namespace App\Filament\Suser\Resources\BusinessPartnerCategories\Pages;

use App\Filament\Suser\Resources\BusinessPartnerCategories\BusinessPartnerCategoryResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBusinessPartnerCategory extends ViewRecord
{
    protected static string $resource = BusinessPartnerCategoryResource::class;

    use ViewPageWithDeleteTrait;
}
