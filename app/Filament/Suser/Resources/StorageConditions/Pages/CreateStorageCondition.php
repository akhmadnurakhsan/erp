<?php

namespace App\Filament\Suser\Resources\StorageConditions\Pages;

use App\Filament\Suser\Resources\StorageConditions\StorageConditionResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateStorageCondition extends CreateRecord
{
    protected static string $resource = StorageConditionResource::class;

    use CreatePageTrait;
}
