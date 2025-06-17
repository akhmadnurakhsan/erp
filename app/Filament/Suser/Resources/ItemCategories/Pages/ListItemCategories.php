<?php

namespace App\Filament\Suser\Resources\ItemCategories\Pages;

use App\Filament\Suser\Resources\ItemCategories\ItemCategoryResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListItemCategories extends ListRecords
{
    protected static string $resource = ItemCategoryResource::class;

    use ListPageTrait;
}
