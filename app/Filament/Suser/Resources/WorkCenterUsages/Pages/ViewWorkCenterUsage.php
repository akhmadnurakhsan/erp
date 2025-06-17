<?php

namespace App\Filament\Suser\Resources\WorkCenterUsages\Pages;

use App\Filament\Suser\Resources\WorkCenterUsages\WorkCenterUsageResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewWorkCenterUsage extends ViewRecord
{
    protected static string $resource = WorkCenterUsageResource::class;

    use ViewPageWithDeleteTrait;
}
