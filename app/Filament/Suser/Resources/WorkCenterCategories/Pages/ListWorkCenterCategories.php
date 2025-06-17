<?php

namespace App\Filament\Suser\Resources\WorkCenterCategories\Pages;

use App\Filament\Suser\Resources\WorkCenterCategories\WorkCenterCategoryResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWorkCenterCategories extends ListRecords
{
    protected static string $resource = WorkCenterCategoryResource::class;

    use ListPageTrait;
}
