<?php

namespace App\Filament\Suser\Resources\TemperatureConditions\Pages;

use App\Filament\Suser\Resources\TemperatureConditions\TemperatureConditionResource;
use App\Traits\ViewPageWithDeleteTrait;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTemperatureCondition extends ViewRecord
{
    protected static string $resource = TemperatureConditionResource::class;

    use ViewPageWithDeleteTrait;
}
