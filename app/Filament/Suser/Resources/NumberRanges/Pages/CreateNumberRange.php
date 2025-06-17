<?php

namespace App\Filament\Suser\Resources\NumberRanges\Pages;

use App\Filament\Suser\Resources\NumberRanges\NumberRangeResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateNumberRange extends CreateRecord
{
    protected static string $resource = NumberRangeResource::class;

    use CreatePageTrait;
}
