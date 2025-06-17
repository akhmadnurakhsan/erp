<?php

namespace App\Filament\Suser\Resources\StatusGroups\Pages;

use App\Filament\Suser\Resources\StatusGroups\StatusGroupResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateStatusGroup extends CreateRecord
{
    protected static string $resource = StatusGroupResource::class;

    use CreatePageTrait;
}
