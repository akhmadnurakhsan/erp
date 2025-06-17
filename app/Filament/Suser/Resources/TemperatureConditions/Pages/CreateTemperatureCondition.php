<?php

namespace App\Filament\Suser\Resources\TemperatureConditions\Pages;

use App\Filament\Suser\Resources\TemperatureConditions\TemperatureConditionResource;
use App\Traits\CreatePageTrait;
use Filament\Resources\Pages\CreateRecord;

class CreateTemperatureCondition extends CreateRecord
{
    protected static string $resource = TemperatureConditionResource::class;

    use CreatePageTrait;
}
