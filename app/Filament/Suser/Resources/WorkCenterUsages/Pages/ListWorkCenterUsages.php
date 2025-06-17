<?php

namespace App\Filament\Suser\Resources\WorkCenterUsages\Pages;

use App\Filament\Suser\Resources\WorkCenterUsages\WorkCenterUsageResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWorkCenterUsages extends ListRecords
{
    protected static string $resource = WorkCenterUsageResource::class;

    use ListPageTrait;
}
