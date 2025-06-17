<?php

namespace App\Filament\Suser\Resources\ItemCategoryGroups\Pages;

use App\Filament\Suser\Resources\ItemCategoryGroups\ItemCategoryGroupResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListItemCategoryGroups extends ListRecords
{
    protected static string $resource = ItemCategoryGroupResource::class;

    use ListPageTrait;
}
