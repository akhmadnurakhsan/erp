<?php

namespace App\Filament\Suser\Resources\StorageConditions\Pages;

use App\Filament\Suser\Resources\StorageConditions\StorageConditionResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStorageCondition extends ViewRecord
{
    protected static string $resource = StorageConditionResource::class;

    use ViewPageWithDeleteTrait;
}
