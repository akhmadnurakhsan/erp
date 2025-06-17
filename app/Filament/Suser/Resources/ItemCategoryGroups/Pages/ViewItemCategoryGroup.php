<?php

namespace App\Filament\Suser\Resources\ItemCategoryGroups\Pages;

use App\Filament\Suser\Resources\ItemCategoryGroups\ItemCategoryGroupResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewItemCategoryGroup extends ViewRecord
{
    protected static string $resource = ItemCategoryGroupResource::class;

    use ViewPageWithDeleteTrait;
}
