<?php

namespace App\Filament\Suser\Resources\ItemCategories\Pages;

use App\Filament\Suser\Resources\ItemCategories\ItemCategoryResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateItemCategory extends CreateRecord
{
    protected static string $resource = ItemCategoryResource::class;

    use CreatePageTrait;
}
