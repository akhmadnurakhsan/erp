<?php

namespace App\Filament\Suser\Resources\StatusStatusGroups\Pages;

use App\Filament\Suser\Resources\StatusStatusGroups\StatusStatusGroupResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateStatusStatusGroup extends CreateRecord
{
    protected static string $resource = StatusStatusGroupResource::class;

    use CreatePageTrait;
}
