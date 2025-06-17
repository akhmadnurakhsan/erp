<?php

namespace App\Filament\Suser\Resources\ItemCategoryGroups\Pages;

use App\Filament\Suser\Resources\ItemCategoryGroups\ItemCategoryGroupResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateItemCategoryGroup extends CreateRecord
{
    protected static string $resource = ItemCategoryGroupResource::class;

    use CreatePageTrait;
}
