<?php

namespace App\Filament\Suser\Resources\WorkCenterCategories\Pages;

use App\Filament\Suser\Resources\WorkCenterCategories\WorkCenterCategoryResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewWorkCenterCategory extends ViewRecord
{
    protected static string $resource = WorkCenterCategoryResource::class;

    use ViewPageWithDeleteTrait;
}
