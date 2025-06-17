<?php

namespace App\Filament\Suser\Resources\WorkCenterUsages\Pages;

use App\Filament\Suser\Resources\WorkCenterUsages\WorkCenterUsageResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateWorkCenterUsage extends CreateRecord
{
    protected static string $resource = WorkCenterUsageResource::class;

    use CreatePageTrait;
}
