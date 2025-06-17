<?php

namespace App\Filament\Suser\Resources\IndustrySectors\Pages;

use App\Filament\Suser\Resources\IndustrySectors\IndustrySectorResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateIndustrySector extends CreateRecord
{
    protected static string $resource = IndustrySectorResource::class;

    use CreatePageTrait;
}
