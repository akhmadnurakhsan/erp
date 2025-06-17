<?php

namespace App\Filament\Suser\Resources\ItemCategories\Pages;

use App\Filament\Suser\Resources\ItemCategories\ItemCategoryResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewItemCategory extends ViewRecord
{
    protected static string $resource = ItemCategoryResource::class;

    use ViewPageWithDeleteTrait;
}
