<?php

namespace App\Filament\Suser\Resources\BusinessPartnerCategories\Pages;

use App\Filament\Suser\Resources\BusinessPartnerCategories\BusinessPartnerCategoryResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBusinessPartnerCategories extends ListRecords
{
    protected static string $resource = BusinessPartnerCategoryResource::class;

    use ListPageTrait;
}
