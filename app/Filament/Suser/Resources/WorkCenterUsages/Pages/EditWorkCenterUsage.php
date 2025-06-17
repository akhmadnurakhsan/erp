<?php

namespace App\Filament\Suser\Resources\WorkCenterUsages\Pages;

use App\Filament\Suser\Resources\WorkCenterUsages\WorkCenterUsageResource;
use App\Traits\EditPageWithDeleteTrait;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditWorkCenterUsage extends EditRecord
{
    protected static string $resource = WorkCenterUsageResource::class;

    use EditPageWithDeleteTrait;
}
