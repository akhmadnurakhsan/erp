<?php

namespace App\Filament\Suser\Resources\Uoms\Pages;

use App\Filament\Suser\Resources\Uoms\UomResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateUom extends CreateRecord
{
    protected static string $resource = UomResource::class;

    use CreatePageTrait;
}
