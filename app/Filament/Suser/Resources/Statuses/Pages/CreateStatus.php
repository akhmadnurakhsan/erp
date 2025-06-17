<?php

namespace App\Filament\Suser\Resources\Statuses\Pages;

use App\Filament\Suser\Resources\Statuses\StatusResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateStatus extends CreateRecord
{
    protected static string $resource = StatusResource::class;

    use CreatePageTrait;
}
