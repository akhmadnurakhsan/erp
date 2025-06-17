<?php

namespace App\Filament\Suser\Resources\TemperatureConditions\Pages;

use App\Filament\Suser\Resources\TemperatureConditions\TemperatureConditionResource;
use App\Traits\ListPageTrait;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTemperatureConditions extends ListRecords
{
    protected static string $resource = TemperatureConditionResource::class;

    use ListPageTrait;
}
