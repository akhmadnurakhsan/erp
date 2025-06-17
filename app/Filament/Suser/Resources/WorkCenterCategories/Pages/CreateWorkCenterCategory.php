<?php

namespace App\Filament\Suser\Resources\WorkCenterCategories\Pages;

use App\Filament\Suser\Resources\WorkCenterCategories\WorkCenterCategoryResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateWorkCenterCategory extends CreateRecord
{
    protected static string $resource = WorkCenterCategoryResource::class;

    use CreatePageTrait;
}
