<?php

namespace App\Filament\Suser\Resources\StorageConditions\Pages;

use App\Filament\Suser\Resources\StorageConditions\StorageConditionResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStorageConditions extends ListRecords
{
    protected static string $resource = StorageConditionResource::class;

    use ListPageTrait;
}
